
@include('frontend.includes.head')
@include('frontend.includes.header') 
<?php
if(isset($_POST['data'])){
   
   
/* Code by David McKeown - craftedbydavid.com */
/* Editable entries are bellow */
  $send_to = "williamhinsch@gmail.com";
// $send_to = "bill@bill-art.com";
$send_subject = "Ajax form ";



/*Be careful when editing below this line */

$f_name = $_POST["name"];
$f_email = $_POST["email"];
$f_message = $_POST["message"];
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}

$message = "This email was submitted on " . date('m-d-Y') . 
"\n\nName: " . $f_name . 
"\n\nE-Mail: " . $f_email . 
"\n\nMessage: \n" . $f_message . 
"\n\n\nTechnical Details:\n" . $from_ip . "\n" . $from_browser;

$send_subject .= " - {$f_name}";

$headers = "From: " . $f_email . "\r\n" .
    "Reply-To: " . $f_email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {
	echo "no email";
	exit;
}else if (!$f_name){
	echo "no name";
	exit;
}else{
	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
		mail($send_to, $send_subject, $message, $headers);
// 		echo "true";
	}else{
		echo "invalid email";
		exit;
	}
}
}
?>

	

	<section id="content">

	<article id="contact" class="active"> 
			<div class="container">
				<div class="sixteen columns"> 
					<h1>Contact</h1>
				</div>
				<div class="sixteen columns"> 
					<div class="sep"></div> 
				</div>
			</div>
			<div class="clear"></div>
			 <div id="gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2986.148667551319!2d-83.62322299963421!3d41.54437819411037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s134%20W.%20South%20Boundary%20St.%2C%20Ste.%20EE%20Perrysburg%2C%20OH%2043551!5e0!3m2!1sen!2s!4v1677738506514!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			 </div> 
			<div id="contact-details">
				<div class="container">
                        <div class="sixteen columns"> 
                            <h3>Contact Details</h3>
                        </div>
					<div class="sixteen columns"> 
						<div class="sep1"></div> 
					</div>
					<div class="one-third column"> 
						<div class="icon-contact">&#xf015;</div>
                        @if($GeneralSettings->location)
                            <div class="detail"> 
                                <p>{!!$GeneralSettings->location!!}</p>
                            </div>
                        @endif
					</div>	
					<div class="one-third column">
						<div class="icon-contact">&#xf095;</div> 
                        @if($GeneralSettings->phone)
                            <div class="detail"> 
                                <p>{{$GeneralSettings->phone}}</p>
                            </div>
                        @endif
					</div>	
					<div class="one-third column"> 
						<div class="icon-contact">&#xf003;</div>
                        @if($GeneralSettings->email)
                            <div class="detail">
                                <p>{{$GeneralSettings->email}}</p>
                            </div>
                        @endif
					</div>	
				</div>
			</div>
			<div id="contact-mes">
				<div class="container">
					<div class="sixteen columns"> 
						<h3 class="contacth">Drop Us a Line</h3>
					</div>
					<div class="sixteen columns"> 
						<div class="sep1"></div> 
					</div>
				</div>
				<div class="container">
					<div class="sixteen columns">
                        @if(session('success'))
                            <div class="alert alert-success ">
                                {{ session('success') }}
                            </div>
                        @endif

						<form action="{{route('user.query')}}"  method="post">
                            @csrf
							<label for="name">Name: * 
								<span class="error" id="err-name" >please enter name</span>
							</label>
							<input name="name" id="name" type="text" required/>
							<label for="email">E-Mail: * 
								<span class="error" id="err-email">please enter e-mail</span>
								<span class="error" id="err-emailvld">e-mail is not a valid format</span>
							</label>
							<input name="email" id="email" type="email" required/>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
							<label for="message">Message:</label>
							<textarea name="message" required id="message"></textarea>
							<button type="submit" class="btn btn-primary" >Submit</button>
							<!--<div class="error" id="err-form">There was a problem validating the form please check!</div>-->
							<!--<div class="error" id="err-timedout">The connection to the server timed out!</div>-->
							<!--<div class="error" id="err-state"></div>-->
						</form>
						<!--<div id="ajaxsuccess">Successfully sent!!</div>	-->
					</div>	
				</div>
			</div>
			
@include('frontend.includes.footer') 
		</article>


	</section>
	
	
@include('frontend.includes.script') 