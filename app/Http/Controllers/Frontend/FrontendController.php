<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\About;
use App\Models\Customer;
use App\Models\GeneralSettings;
use App\Models\ContactSubmitted;
use App\Models\Features;
use App\Models\Count;
use App\Models\CallToAction;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Package;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use DB;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HomeSlider=HomeSlider::all();
        $About=About::first();
        $Features=Features::all();
        $Count=Count::all();
        $Testimonial=Testimonial::all();
        $Faq=Faq::all();
        $CallToAction=CallToAction::first();
        $GeneralSettings=GeneralSettings::first();
        $Package=Package::all();
        return view('frontend.index',compact('HomeSlider','About','Features','Count','Testimonial','Faq','CallToAction','GeneralSettings','Package'));        
    }
  
    public function payment(Request $request ,$id)
    {
        $getInvoice = DB::table('invoices')->where('invoice_no',$id)->first();
        
        // $price = $request->input('price');
        // return view('frontend.payment', ['price' => $price]);
        return view('frontend.payment', compact('getInvoice'));
    }
 
    // public function payment()
    // {
    //     return view('frontend.payment');        
    // }
   
    public function contactus()
    {
        $GeneralSettings=GeneralSettings::first();
        return view('frontend.contactus',compact('GeneralSettings'));        
    }
    
    public function UserMessage(Request $request)
    {
        $validatedData = $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('contact_submissions'),
            ],
        ]);
        $ContactSubmitted= new ContactSubmitted;
        $ContactSubmitted->name=$request->name;
        $ContactSubmitted->email=$request->email;
        $ContactSubmitted->subject=$request->subject;
        $ContactSubmitted->message=$request->message;
        $ContactSubmitted->save();
        return redirect()->back()->with('success', 'Form submitted successfully!');;        
    }

    public function login()
    {
        return view('frontend.login');        
    }
    
    public function signup()
    {
        return view('frontend.signup');        
    }
    
    public function forgotpassword()
    {
        return view('frontend.forgotpassword');        
    } 

    public function welcome()
    {

        return view('frontend.welcome');        
    }

    public function verifypage()
    {
        return view('frontend.verification_page');        
    }

    public function cutomersignup(Request $request)
    {
        $getRecord=User::where('email',$request->email)->first();
        if($getRecord){
            return redirect()->back()->with(['error'=>'Email already exists, please try another one.']); 
        }
        else{
            $validatedData = $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('customers'),
                ],
            ]);
    
            $randomisbn = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . mt_rand(1000, 9999);
    
            while (User::where('isbn', $randomisbn)->exists()) {
                $randomisbn = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . mt_rand(1000, 9999);
            }
    
            $randompasscode = mt_rand(100000, 999999);
    
            while (User::where('passcode', $randompasscode)->exists()) {
                $randompasscode = mt_rand(100000, 999999);
            }
    
            $randomvarificationcode = mt_rand(100000, 999999);
    
            while (User::where('verification_code', $randomvarificationcode)->exists()) {
                $randomvarificationcode = mt_rand(100000, 999999);
            }
    
    
     // $user = User::create([
     //          'isbn' => $randomisbn,
     //          'customer_name' => $request->customer_name,
     //          'email' => $request->email,
     //          'phone' => $request->phone,
     //          'company_name' => $request->company_name,
     //          'passcode' => $request->randompasscode,
     //        ]);
            $user= new User;
            $user->isbn=$randomisbn;
            $user->fname=$request->customer_name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->company_name=$request->company_name;
            $user->passcode=$randompasscode;
            $user->status='pending';
            $user->active_pakage='pending';
            $user->password= Hash::make($request->password);
    
            $user->verification_code=$randomvarificationcode;
            $user->save();
            $token = $user->createToken('LaravelAuthApp')->accessToken;
            // $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
$f_email='hammad@friendsitsolutions.com';
$send_to = 'hammad@friendsitsolutions.com';
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}
$message = "Hi Admin, another person " .$request->email. " has requested to register. Please review his company and proceed accordingly.";
$send_subject= "New Request";


$headers = "From: " . $f_email . "\r\n" .
    "Reply-To: " . $f_email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {
	echo "no email";
	exit;
}else{
  
	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
      mail($send_to,$send_subject, $message, $headers);
	}else{
    $_SESSION['status'] = "Form has been submitted successfully";
		echo "invalid email";
		exit;
	}
}
}
   
// return redirect()->back();
            // return redirect()->back()->with(['success'=>'Form submitted successfully!','token' => $token]);
             return view('frontend.welcome');   
        }
             
    


    public function cutomerlogin(Request $request)
    {
        $request->validate([
         'email'=>'required',
         'password'=>'required',
        ]);
         $randomvarificationcode = mt_rand(100000, 999999);

        while (User::where('verification_code', $randomvarificationcode)->exists()) {
            $randomvarificationcode = mt_rand(100000, 999999);
        }
        $verification_num=User::where('email',$request->email)->update([
            'verification_code'=>$randomvarificationcode,
            ]);
        $email = $request->email;
        $password = $request->password;
        $result = User::where('email', $email)->where('password',$password)->first();
        if($result)
        {
            if ($result->status!='approved') {
                $request->session()->flash('message', 'Your Account are not Approved by Admin Thanks');
                return redirect('/login');
            }
           if($result->email==$request->email && $result->password==$request->password && $result->status=='approved')
            {

                $token = $result->createToken('LaravelAuthApp')->accessToken;
                $request->session()->flash('verification_message', 'Verification code send to your email.Enter code to access portal.Thanks');
                $request->session()->put('verification_time',Carbon::now());
                $request->session()->flash('email',$email);
                $body = "You are receiving this email because we received a password reset request for your account.";

                \Mail::send('verification', ['fname'=>$result->fname, 'verification_code'=>$result->verification_code, 'body' => $body], function ($message) use ($request) {
                    $message->from('info@ezpay.com', 'EZpay');

                        $message->to($request->email, 'Your Email')
                            ->subject('verification Code');

                });
                // return view('frontend.verification_page',compact('email'));
                 // redirect to verification page
                return redirect()->route('verifypage');
                // $request->session()->put('USER_LOGIN', true);
                // $request->session()->put('USER_ID', $result->id);
                // return redirect('https://fisdemoprojects.com/ezpay/member/index.php');
            }
            else
            { 
                $request->session()->flash('message', 'PLease Enter Valid Credientials Thanks');
                return redirect('/login');
            }
        }
        else
        {
            $request->session()->flash('message', 'PLease Enter Valid Credientials Thanks');
            return redirect('/login');
        }
    }

    public function customerverification(Request $request)
    {
        $verificationCode = User::where('email',$request->email)->where('verification_code', $request->verification_code)
            ->first();

        
        // check if verification code is expired (more than 30 seconds old)
        $verificationTime = $request->session()->get('verification_time');
        if ($verificationCode && time() > $verificationTime->addSeconds(30)->getTimestamp()){
            // code is invalid or expired
            $request->session()->flash('verification_code', 'Oop! Your verification code expire.Try Again');
            $randomvarificationcode = mt_rand(100000, 999999);

            while (User::where('verification_code', $randomvarificationcode)->exists()) {
                $randomvarificationcode = mt_rand(100000, 999999);
            }
            if($verificationCode){
                $verificationCode->verification_code=$randomvarificationcode;
                $verificationCode->save();
            }
            return redirect('/login');
        }

         if ($verificationCode  && time() <= $verificationTime->addSeconds(30)->getTimestamp()) {

            $randomvarificationcode = mt_rand(100000, 999999);

            while (User::where('verification_code', $randomvarificationcode)->exists()) {
                $randomvarificationcode = mt_rand(100000, 999999);
            }
            if($verificationCode){
                $verificationCode->verification_code=$randomvarificationcode;
                $verificationCode->save();
            }

            $token = $verificationCode->createToken('LaravelAuthApp')->accessToken;
             // clear verification code and time from session
            $request->session()->forget('verification_code');
            $request->session()->forget('verification_time');
            $request->session()->forget('email');
            
            // code is valid
            $request->session()->put('USER_LOGIN', true);
            $request->session()->put('USER_ID', $verificationCode->id);
            return redirect('https://fisdemoprojects.com/ezpay/member/index.php');
        } 
    }

}
