<?php

use App\Models\Data;
use App\Models\User;
use App\Models\Cable;
use App\Models\CdsGroup;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BulkSMSController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\WaybillController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [BusinessController::class, 'index'])->name('homepage');
Route::get('/cdsprojects', [BusinessController::class, 'cdsprojects'])->name('cdsprojects');
Route::get('/cdsproject/{id}', [BusinessController::class, 'cdsproject'])->name('cdsproject');
Route::post('/fetchCDSProject', [BusinessController::class, 'fetchCDSProject'])->name('fetchCDSProject');

Route::view('/supervisor-registration', 'auth.registersupervisor')->name('supervisor-registration');
Route::post('/registerSupervisor', [RegisteredUserController::class, 'registerSupervisor'])->name('registerSupervisor');


Route::view('certificate','frontend.certificate');
Route::get('/asset-location', function () {
    $publicPath = public_path();

    return $publicPath;
});

Route::get('/uuid', function () {
    $cdsgroups = CdsGroup::all();
    foreach($cdsgroups as $cds) {
        $cds->uuid = Str::uuid();
        $cds->save();
    }

});

Route::get('/testemail', function() {
    // Define the email details
    $toEmail = 'fasanyafemi@gmail.com';
    $subject = 'Test Email';
    $messageBody = 'Hello World';

    // Send the email
    Mail::raw($messageBody, function ($message) use ($toEmail, $subject) {
        $message->to($toEmail)
                ->subject($subject)
                ->from('nysc@corperscds.com', 'CORPERS-CDS');
    });

    // Return a response
    return 'Email sent successfully!';
});
// Route::get('/runuid', function () {
//    $tranx = Transaction::all();
//    foreach($tranx as $tr) {
//     $tr->uid = Str::uuid();
//     $tr->save();
//    }

   
// });

Route::view('/business', 'business_frontend.business');
Route::any('/run_schedule_purchase', [App\Http\Controllers\SubscriptionController::class, 'run_schedule_purchase'])->name('run_schedule_purchase');
Route::any('/test_debit/{client_reference}/{reference}', [App\Http\Controllers\FundingController::class, 'test_debit'])->name('test_debit');
Route::any('/run_debit/{client_reference}/{reference}', [App\Http\Controllers\FundingController::class, 'run_debit'])->name('run_debit');
Route::any('/run_normal/{client_reference}/{reference}', [App\Http\Controllers\FundingController::class, 'run_normal'])->name('run_normal');

require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::any('/upgrade/{id}', [BusinessController::class, 'upgrade'])->name('upgrade');
Route::any('/saveBeneficiary', [BusinessController::class, 'saveBeneficiary'])->name('saveBeneficiary');
Route::any('/removeBeneficiary', [BusinessController::class, 'removeBeneficiary'])->name('removeBeneficiary');

Route::get('/delete_group/{id}', [BulkSMSController::class, 'deleteGroup'])->name('delete_group');
Route::any('/saveContacts', [BulkSMSController::class, 'saveContacts'])->name('saveContacts');
Route::post('/submitSMSForm', [BulkSMSController::class, 'submitSMSForm'])->name('submitSMSForm');
Route::post('/sendSMS2', [BulkSMSController::class, 'sendSMS2'])->name('sendSMS2');
Route::any('/resend_sms/{id}', [BulkSMSController::class, 'resendSMS'])->name('resend_sms');

//the subdomain website routes

Route::middleware(['supervisor','exco','auth'])->group(function () {
    Route::get('/makeexco/{id}', [SupervisorController::class, 'makeexco'])->name('makeexco');
    Route::get('/viewexcos/{id}', [SupervisorController::class, 'viewexcos'])->name('viewexcos');
    Route::get('/dashboard/{id}', [SupervisorController::class, 'dashboard'])->name('managecds');
});

Route::middleware(['exco','auth'])->group(function () {
    // Route::get('/dashboard/{id}', [ExcoController::class, 'dashboard'])->name('managecds');
    // Route::get('/excodashboard', [ExcoController::class, 'dashboard'])->name('excodashboard');
    Route::get('/createannouncement/{id}', [ExcoController::class, 'createannouncement'])->name('createannouncement');
    Route::post('/saveannouncement', [ExcoController::class, 'saveannouncement'])->name('saveannouncement');
    Route::get('/exconotifications/{id}', [ExcoController::class, 'notifications'])->name('exconotifications');
    Route::post('/saveWhatsappGroup', [ExcoController::class, 'saveWhatsappGroup'])->name('saveWhatsappGroup');
    Route::any('/deleteann/{id}', [ExcoController::class, 'deleteann'])->name('deleteann');
    
    Route::get('/createproject/{id}', [ExcoController::class, 'createproject'])->name('createproject');
    Route::get('/editproject/{id}', [ExcoController::class, 'editproject'])->name('editproject');
    Route::get('/changeprojectstatus/{id}', [ExcoController::class, 'changeprojectstatus'])->name('changeprojectstatus');
    Route::get('/addprojectimages/{id}', [ExcoController::class, 'addprojectimages'])->name('addprojectimages');
    Route::post('/saveadditionalimages', [ExcoController::class, 'saveadditionalimages'])->name('saveadditionalimages');
    Route::any('/deleteprojectimage/{id}', [ExcoController::class, 'deleteprojectimage'])->name('deleteprojectimage');
    Route::post('/updateproject/', [ExcoController::class, 'updateproject'])->name('updateproject');
    Route::any('/deleteproject/{id}', [ExcoController::class, 'deleteproject'])->name('deleteproject');
    Route::post('/saveproject', [ExcoController::class, 'saveproject'])->name('saveproject');
    Route::get('/viewprojects/{id}', [ExcoController::class, 'projects'])->name('projects');
    
    Route::get('/addpayment/{id}', [ExcoController::class, 'addpayment'])->name('addpayment');
    Route::post('/savepayment', [ExcoController::class, 'savepayment'])->name('savepayment');
    Route::get('/viewpayments/{id}', [ExcoController::class, 'payments'])->name('payments');
    Route::any('/deletepayment/{id}', [ExcoController::class, 'deletepayment'])->name('deletepayment');
    
    Route::get('/viewtransactions/{id}', [ExcoController::class, 'viewtransactions'])->name('viewtransactions');
    Route::get('/markpaid/{paymentId}/{userId}', [ExcoController::class, 'markpaid'])->name('markpaid');
    Route::get('/markunpaid/{paymentId}/{userId}', [ExcoController::class, 'markunpaid'])->name('markunpaid');
    

});
Route::middleware(['auth'])->group(function () {
    // Auth::routes();


    // Route::get('/', [BusinessController::class, 'landing'])->name('index');

    // Route::view('/','coming_soon');
    // Route::any('/notify', [App\Http\Controllers\SubscriptionController::class, 'notify'])->name('notify');

   
    Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
    Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'notifications'])->name('notifications');
    
    Route::any('/withdraw/{id}', [WaybillController::class, 'withdraw'])->name('withdraw');
    Route::any('confirm_account', [HomeController::class, 'confirm_account'])->name('confirm_account');
    Route::any('make_transfer', [HomeController::class, 'make_transfer'])->name('make_transfer');
    Route::any('make_withdraw', [HomeController::class, 'make_withdraw'])->name('make_withdraw');
    

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/process_order', [App\Http\Controllers\HomeController::class, 'process_order'])->name('process_order');
    Route::get('/delete_order', [App\Http\Controllers\HomeController::class, 'delete_order'])->name('delete_order');
    Route::post('/updateprofile', [App\Http\Controllers\HomeController::class, 'updateprofile'])->name('updateprofile');
    Route::post('/setpin', [App\Http\Controllers\HomeController::class, 'setpin'])->name('setpin');
    Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('user-fundwallet', [App\Http\Controllers\HomeController::class, 'fundwallet'])->name('fundwallet');


    Route::post('/checkout/{checkout?}', [App\Http\Controllers\FundingController::class, 'checkout'])->name('checkout');

    Route::get('resend_verification', [App\Http\Controllers\HomeController::class, 'resend_verification'])->name('resend_verification');
    Route::get('transactions', [App\Http\Controllers\HomeController::class, 'transactions'])->name('transactions');
    Route::get('activities', [App\Http\Controllers\HomeController::class, 'activities'])->name('activities');
    Route::post('/pay', [App\Http\Controllers\FundingController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [App\Http\Controllers\FundingController::class, 'handleFLWCallback']);
    Route::get('/reserve_account', [App\Http\Controllers\FundingController::class, 'reserve_account']);
    Route::post('monnify/transaction_complete', [App\Http\Controllers\MonnifyController::class, 'monnifyTransactionComplete2']);
    //subscription routes
    // Payrll and payee 
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('support');


    //new routes
    Route::any('/resetpassword', [App\Http\Controllers\UserController::class, 'resetpassword'])->name('resetpassword');
    Route::any('/change-password', [App\Http\Controllers\UserController::class, 'changepassword'])->name('change-password');
    Route::any('/resetpin', [App\Http\Controllers\UserController::class, 'resetpin'])->name('resetpin');
    Route::any('/user-change-pin', [App\Http\Controllers\UserController::class, 'changepin'])->name('change-pin');
    Route::any('/forgot-pin', [App\Http\Controllers\UserController::class, 'forgotpin'])->name('forgot-pin');
    Route::any('/reset-pin-with-token', [App\Http\Controllers\UserController::class, 'resetPinWithToken'])->name('reset-pin-with-token');
    Route::any('/reset-forgot-pin', [App\Http\Controllers\UserController::class, 'resetforgotpin'])->name('reset-forgot-pin');
    Route::any('/print_transaction_receipt/{id}', [App\Http\Controllers\UserController::class, 'print_transaction_receipt'])->name('print_transaction_receipt');

    // Email Verification Routes...
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


    //the business domain start

    Route::get('home', [HomeController::class, 'dashboard'])->name('admin_home')->name('dashboard');
    
    // Route::post('/updateprofile', [BusinessController::class, 'updateprofile'])->name('updateprofile');
    Route::get('/change_password', [BusinessController::class, 'change_password'])->name('change_password');
    Route::any('/users', [BusinessController::class, 'user_management'])->name('users');
    Route::any('/transactions/{id}', [BusinessController::class, 'transactions'])->name('transactions');
    Route::any('/block_user/{id}', [BusinessController::class, 'block_user'])->name('transactions');


    Route::any('/verify_transaction/{ref?}', [SubscriptionController::class, 'verify_transaction'])->name('verify_transaction');
    Route::any('/check_verify_transaction', [SubscriptionController::class, 'check_verify_transaction'])->name('check_verify_transaction');

    Route::get('fundwallet', [BusinessController::class, 'fundwallet'])->name('fundwallet');
    Route::post('generatePermanentAccount', [FundingController::class, 'generatePermanentAccount'])->name('generatePermanentAccount');
    Route::post('/checkout', [App\Http\Controllers\FundingController::class, 'admin_checkout'])->name('admin_checkout');

    Route::get('payment_transactions', [BusinessController::class, 'payment_transactions'])->name('payment_transactions');
    Route::get('purchase_transactions', [BusinessController::class, 'purchase_transactions'])->name('purchase_transactions');
    Route::get('pending_transactions', [BusinessController::class, 'pending_transactions'])->name('pending_transactions');
    Route::get('mytransactions', [BusinessController::class, 'mytransactions'])->name('mytransactions');


    Route::post('/setpin', [App\Http\Controllers\HomeController::class, 'setpin'])->name('setpin');
    Route::any('/resetpin', [App\Http\Controllers\UserController::class, 'resetpin'])->name('resetpin');
    Route::any('/change-pin', [App\Http\Controllers\UserController::class, 'admin_changepin'])->name('change-pin');
    Route::any('/forgot-pin', [App\Http\Controllers\UserController::class, 'forgotpin'])->name('forgot-pin');
    Route::any('/reset-pin-with-token', [App\Http\Controllers\UserController::class, 'resetPinWithToken'])->name('reset-pin-with-token');
    Route::any('/reset-forgot-pin', [App\Http\Controllers\UserController::class, 'resetforgotpin'])->name('reset-forgot-pin');
    Route::any('/print_transaction_receipt/{id}', [App\Http\Controllers\UserController::class, 'print_transaction_receipt'])->name('print_transaction_receipt');





    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    // Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');



    Route::get('withdraw', [BusinessController::class, 'withdraw'])->name('admin_withdraw');
    Route::post('/pay', [App\Http\Controllers\FundingController::class, 'redirectToGateway'])->name('admin_pay');
    Route::get('/payment/callback', [App\Http\Controllers\FundingController::class, 'handleGatewayCallback']);
    Route::get('/reserve_account', [App\Http\Controllers\FundingController::class, 'reserve_account']);
    Route::post('monnify/transaction_complete', [App\Http\Controllers\MonnifyController::class, 'monnifyTransactionComplete2']);

    //subscription routes

    Route::group(['middleware' => 'auth'], function () {
        // Route::any('/run_schedule_purchase', [App\Http\Controllers\SubscriptionController::class, 'run_schedule_purchase'])->name('run_schedule_purchase');
        Route::any('/superadmin', [App\Http\Controllers\SuperController::class, 'index'])->name('superadmin');
        Route::any('/allwaybills', [App\Http\Controllers\SuperController::class, 'allwaybills'])->name('allwaybills');
        Route::any('/allusers', [App\Http\Controllers\SuperController::class, 'allusers'])->name('allusers');
        Route::any('/schedule_accounts', [App\Http\Controllers\SuperController::class, 'schedule_accounts'])->name('schedule_accounts');
        Route::any('/admin_giveaway', [App\Http\Controllers\SuperController::class, 'admin_giveaway'])->name('admin_giveaway');
        Route::any('/all_payment_transactions', [App\Http\Controllers\SuperController::class, 'payment_transactions'])->name('all_payment_transactions');
        Route::any('/all_withdrawals', [App\Http\Controllers\SuperController::class, 'all_withdrawals'])->name('all_withdrawals');
        Route::any('/approve_withdraw/{id}', [App\Http\Controllers\SuperController::class, 'approve_withdraw'])->name('approve_withdraw');
        Route::any('/revert_withdraw/{id}', [App\Http\Controllers\SuperController::class, 'revert_withdraw'])->name('revert_withdraw');
        Route::any('/user_management', [App\Http\Controllers\SuperController::class, 'user_management'])->name('user_management');
        Route::any('/user_transaction/{id}', [App\Http\Controllers\SuperController::class, 'user_transaction'])->name('user_transaction');
        Route::any('/data_price', [App\Http\Controllers\SuperController::class, 'data_price'])->name('data_price');
        Route::any('/plan_status', [App\Http\Controllers\SuperController::class, 'plan_status'])->name('plan_status');
        Route::any('/plan_status/{network_id}/{type}', [App\Http\Controllers\SuperController::class, 'update_plan_status'])->name('update_plan_status');
        Route::any('/update_data', [App\Http\Controllers\SuperController::class, 'update_data'])->name('update_data');
        Route::any('/cable_price', [App\Http\Controllers\SuperController::class, 'cable_price'])->name('cable_price');
        Route::any('/update_cable', [App\Http\Controllers\SuperController::class, 'update_cable'])->name('update_cable');
        Route::any('/block_user/{id}', [App\Http\Controllers\SuperController::class, 'block_user'])->name('block_user');
        Route::any('/upgrade_user/{id}', [App\Http\Controllers\SuperController::class, 'upgrade_user'])->name('upgrade_user');
        Route::any('/duplicate_transactions/', [App\Http\Controllers\SuperController::class, 'duplicate_transactions'])->name('duplicate_transactions');
        Route::any('/contact_gain/', [App\Http\Controllers\SuperController::class, 'contact_gain'])->name('contact_gain');
        Route::any('/downloadCSV/', [App\Http\Controllers\SuperController::class, 'downloadCSV'])->name('downloadCSV');
        Route::any('/admin_delete_duplicate/{type}/{id}', [App\Http\Controllers\SubscriptionController::class, 'admin_delete_duplicate'])->name('admin_delete_duplicate');
    });
});
// Route::get('/{slug}', [WaybillController::class, 'slug'])->name('slug')->middleware('auth');

//business domain end
//the subdomains
// Route::domain('{subdomain}.localhost')->middleware(['subdomain.auth'])->group(function () {
