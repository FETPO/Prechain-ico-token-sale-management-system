<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ViewsController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\AdminViewsController;
use App\Http\Controllers\Admin\StageController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UsersActionController;
use App\Http\Controllers\Admin\AdKycController;
use App\Http\Controllers\Admin\ManageAdminController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ActivityController;
use App\Http\Controllers\User\KycController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\StakingController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialLoginController;
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

//activate and deactivate Prechain
Route::any('/activate', function () {
	return view('activate.index',[
		'settings' => Settings::where('id','1')->first(),
	]);
});

Route::any('/revoke', function () {
	return view('revoke.index');
});

Route::get('/', [Controller::class, 'homepage'])->name('homepage');
Route::post('sendcontact',  [Controller::class, 'sendContact'])->name('enquiry');

Route::get('/ref/{id}', [ViewsController::class, 'ref'])->name('refer');
Route::get('/setroi', [Controller::class, 'getRoi'])->name('getroi');

// Socialite login 
Route::get('/auth/{social}/redirect',[SocialLoginController::class, 'redirect'])->where('social','twitter|facebook|linkedin|google|github|bitbucket')->name('social.redirect');
Route::get('/auth/{social}/callback',[SocialLoginController::class, 'authenticate'])->where('social','twitter|facebook|linkedin|google|github|bitbucket')->name('social.callback');

Route::get('/verify-email', function(){
	return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');;

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// User Dashboard routes
Route::get('/dashboard', [ViewsController::class, 'dashboard_home'])->middleware(['auth:sanctum', 'verified', 'status'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified', 'status'])->prefix('dashboard/user')->group(function()
{
	// Views Routes
	Route::get('contribute', [ViewsController::class, 'buytoken'])->name('buytoken');
    Route::get('transactions', [ViewsController::class, 'transactions'])->name('transactions');
	Route::get('account', [ViewsController::class, 'profile'])->name('profile');
	Route::get('account/balance', [ViewsController::class, 'mytoken'])->name('mytoken');
	Route::get('kyc', [ViewsController::class, 'kycinfo'])->name('kycinfo');
	Route::get('kyc/application', [ViewsController::class, 'kycapplication'])->name('kycapplication');
	Route::get('account/activity', [ViewsController::class, 'activity'])->name('activity');
	Route::get('referral', [ViewsController::class, 'referral'])->name('referral');
	Route::get('account/clear-activity/{user_id}', [ActivityController::class, 'clearactivity'])->name('clearactivity');
	Route::get('buytoken/payment', [ViewsController::class, 'payment'])->name('payment');
	Route::get('transfer/success', [ViewsController::class, 'tsuccess'])->name('tsuccess');

	// Profile Update
	Route::put('update-profile', [ProfileController::class, 'updateprofile'])->name('profile.update');
	Route::put('update-wallet-address', [ProfileController::class, 'updatewallet'])->name('wallet.update');
	Route::put('update-password', [ProfileController::class, 'updatepassword'])->name('password.update');

	Route::post('submit-kyc', [KycController::class, 'submitkyc'])->name('submitkyc');
	Route::get('cancel-payment', [PaymentController::class, 'cancelpayment'])->name('cancelpayment');

	Route::get('api-check', [PaymentController::class, 'apicheck']);

	Route::post('complete-payment', [PaymentController::class, 'completepayment'])->name('completepayment');
	Route::post('transfer-completed', [PaymentController::class, 'completet'])->name('completet');

	// User staking
	Route::get('stake-token', [ViewsController::class, 'stake'])->name('staketoken');
	Route::post('stake', [StakingController::class, 'stakenow'])->name('stakenow');
	Route::get('cancel-stake/{id}', [StakingController::class, 'cancelStake'])->name('cancelstake');
});




// Admin routes starts here

// Admin Login
Route::prefix('adminlogin')->group(function () {
	Route::get('login',[LoginController::class, 'showLoginForm'])->name('adminloginform');
	Route::post('login',[LoginController::class, 'adminlogin'])->name('adminlogin');
	Route::post('logout',[LoginController::class, 'adminlogout'])->name('adminlogout');
	Route::get('dashboard',[LoginController::class, 'validate_admin'])->name('validate_admin');
});

Route::middleware(['isadmin'])->prefix('admin')->group(function()
{
	// Dashboard
    Route::get('dashboard',[AdminViewsController::class, 'dashboard_admin'])->name('admin.dashboard');

	// Stages Funtions
	Route::get('stages',[AdminViewsController::class, 'stages'])->name('stages');
	Route::get('add-stages',[AdminViewsController::class, 'newstage'])->name('newstage');
	Route::post('add-stages',[StageController::class, 'addstage'])->name('addstage');
	Route::get('update-stage/{id}',[AdminViewsController::class, 'updatestage'])->name('edit.stage');
	Route::post('update-stage',[StageController::class, 'updatestage'])->name('update.stage');
	Route::get('mark-active/{id}',[StageController::class, 'markactive'])->name('markactive');
	Route::get('pause-sales/{id}',[StageController::class, 'pausesales'])->name('pausesales');
	Route::get('resume-sales/{id}',[StageController::class, 'resumesales'])->name('resumesales');

	// Admin Views Routes
	Route::get('settings',[AdminViewsController::class, 'settings'])->name('settings');
	Route::get('user-list',[AdminViewsController::class, 'manageusers'])->name('userlist');
	Route::get('transactions',[AdminViewsController::class, 'transactions'])->name('admin.trx');
	Route::get('kyc-list',[AdminViewsController::class, 'kyclist'])->name('kyclist');
	Route::get('view-transaction/{id}',[AdminViewsController::class, 'viewtransaction'])->name('viewtransaction');
	Route::get('view-kyc/{id}',[AdminViewsController::class, 'viewkyc'])->name('viewkyc');

	Route::get('view-kyc-documents/{id}',[AdminViewsController::class, 'viewDoc'])->name('viewkycimg');

	Route::get('user-details/{id}',[AdminViewsController::class, 'viewuser'])->name('viewuser');

	Route::post('update-profile', [ManageAdminController::class , 'updateProfile'])->name('upadprofile');
	Route::get('adminprofile', [AdminViewsController::class , 'adminProfile'])->name('adminprofile');
	Route::post('adminupdatepass', [ManageAdminController::class , 'adminupdatepass'])->name('adminupdatepass');

	// Settings routes
	Route::post('save-ico',[SettingsController::class, 'saveico'])->name('saveico');
	Route::post('save-pay-option',[SettingsController::class, 'savepayoption'])->name('savepayoption');
	Route::post('save-web-settings',[SettingsController::class, 'savewebsettings'])->name('savewebsettings');
	Route::post('save-payment-method',[SettingsController::class, 'savemethod'])->name('savemethod');
	Route::put('update-payment-method',[SettingsController::class, 'updatemethod'])->name('updatemethod');
	Route::put('update-ref-commission',[SettingsController::class, 'saverefcom'])->name('saverefcom');
	Route::put('save-kyc-settings',[SettingsController::class, 'savekycset'])->name('savekycset');
	Route::put('save-staking-settings',[SettingsController::class, 'savestakeset'])->name('savestakeset');

	//Transaction Actions
	Route::get('confirm-tranx/{id}',[TransactionController::class, 'confirmtran'])->name('confirmtran');
	Route::get('cancel-tranx/{id}',[TransactionController::class, 'canceltran'])->name('canceltran');
	Route::post('add-token',[TransactionController::class, 'addtoken'])->name('addtoken');
	Route::get('screenshot/{file}', [TransactionController::class, 'viewScreenshot'])->name('upload.view');
	
	// User Actions
	Route::get('user-activity/{id}',[AdminViewsController::class, 'useractivity'])->name('useractivity');
	Route::get('user-referral/{id}',[AdminViewsController::class, 'userreferral'])->name('userreferral');
	Route::get('user-resetpassword/{id}',[UsersActionController::class, 'resetpassword'])->name('resetpassword');
	Route::get('suspend/user/{id}',[UsersActionController::class, 'block'])->name('suspend.user');
	Route::get('unsuspend/user/{id}',[UsersActionController::class, 'unblock'])->name('unsuspend');
	Route::get('delete/user/{id}',[UsersActionController::class, 'deleteuser'])->name('deleteuser');
	Route::post('send_email',[UsersActionController::class, 'sendmail'])->name('sendmail');
	Route::post('adduser',[UsersActionController::class, 'adduser'])->name('adduser');

	// kyc controller
	Route::get('file-download/{file}', [AdKycController::class, 'downloadfile'])->name('file.download');
	Route::get('accept-verification/{id}', [AdKycController::class, 'accept'])->name('accept.ve');
	Route::get('reject-verification/{id}', [AdKycController::class, 'reject'])->name('reject.ve');
	Route::get('delete-verification/{id}', [AdKycController::class, 'delete'])->name('delete.ve');


	
});



