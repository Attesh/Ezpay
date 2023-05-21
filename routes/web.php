<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\GeneralSettingsController;
use App\Http\Controllers\Backend\HomeSliderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ContactSubmittedController;
use App\Http\Controllers\Backend\FeaturesListController;
use App\Http\Controllers\Backend\SocialAccountsController;

use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/',[FrontendController::class,'index']);
Route::get('/login',[FrontendController::class,'login'])->name('login');
Route::get('/signup',[FrontendController::class,'signup']);
Route::get('/payment/invociesno={id}',[FrontendController::class,'payment']);
Route::get('/contact',[FrontendController::class,'contactus']);
Route::post('/user/message',[FrontendController::class,'UserMessage'])->name('user.query');
Route::get('/welcome',[FrontendController::class,'welcome'])->name('welcome');
Route::post('/cutomer/signup',[FrontendController::class,'cutomersignup'])->name('cutomer.signup');



Route::get('/admin',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/signin',[AdminController::class,'signin'])->name('admin.signin');
Route::group(['middleware' => 'admin'], function () {
/*Admin Login Routes*/

Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->flash('Error', 'Logout Successfully');
    return redirect('admin');
});
});