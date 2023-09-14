<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




Route::name('member.')->group(function(){

    // Guest Users
    Route::middleware(['member.guest','PreventBackHistory'])->group(function(){

        Route::get('/', [App\Http\Controllers\Teacher\AuthController::class, 'showLogin'])->name('/');
        Route::get('login', [App\Http\Controllers\Teacher\AuthController::class, 'showLogin'] )->name('login');
        Route::post('login', [App\Http\Controllers\Teacher\AuthController::class, 'login'])->name('signin');

        Route::get('register', [App\Http\Controllers\Teacher\AuthController::class, 'showRegister'] )->name('register');
        Route::post('register', [App\Http\Controllers\Teacher\AuthController::class, 'register'])->name('signup');
        Route::get('guideline/{t_id}', [App\Http\Controllers\Teacher\AuthController::class, 'guideline'] )->name('guideline');
        Route::post('add-guideline', [App\Http\Controllers\Teacher\AuthController::class, 'addGuideline'] )->name('add-guideline');
         Route::get('registration-success', [App\Http\Controllers\Teacher\AuthController::class, 'regsuccess'] )->name('regteacher');
        Route::post('join-initiative', [App\Http\Controllers\Teacher\AuthController::class, 'joinInitiative'] )->name('join-initiative');


        // Password Routes
        Route::get('forgot-password', [App\Http\Controllers\Teacher\AuthController::class, 'showForgot'])->name('forgot-password');
        Route::get('password-reset-success', [App\Http\Controllers\Teacher\AuthController::class, 'showSuccess'])->name('passwordresetsuc');
        Route::post('forgot-link', [App\Http\Controllers\Teacher\AuthController::class, 'sendForgetLink'])->name('forgot-link');
        
        Route::post('change-password', [App\Http\Controllers\Teacher\DashboardController::class, 'changePassword'])->name('change-password');
        Route::get('set-password', [App\Http\Controllers\Teacher\DashboardController::class, 'setPassword'])->name('set-password');
        Route::get('payment/{id}', [App\Http\Controllers\RazorpayPaymentController::class, 'teacherindex']);
        Route::get('payment-success/{id}', [App\Http\Controllers\RazorpayPaymentController::class, 'paymentsuccessTeacher']);
        Route::post('payment/{id}', [App\Http\Controllers\RazorpayPaymentController::class, 'storeTeacher'])->name('razorpay.payment.storeTeacher');

    });


    // Authenticated users
    Route::middleware(['teacher.auth','PreventBackHistory'])->group(function(){



        // Route::view('dashboard', 'teacher.dashboard')->name('dashboard');
         Route::get('requestModule', [App\Http\Controllers\Teacher\DashboardController::class, 'requestModule'])->name('requestModule');
         Route::post('requestModule', [App\Http\Controllers\Teacher\DashboardController::class, 'saverequestModule'])->name('saverequestModule');
        Route::get('home', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('home');
        Route::post('classlocations', [App\Http\Controllers\Teacher\DashboardController::class, 'classlocations'])->name('classlocations');
         Route::any('clearclasslocations', [App\Http\Controllers\Teacher\DashboardController::class, 'clearclasslocations'])->name('clearclasslocations');
        Route::post('logout', [App\Http\Controllers\Teacher\AuthController::class, 'Logout'])->name('logout');
        // Route::get('forgot-password', [App\Http\Controllers\Teacher\AuthController::class, 'showForgot'])->name('forgot-password');



        Route::get('dashboard', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('dashboard');
        // Route::get('dashboard', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('dashboard');
        Route::get('profile', [App\Http\Controllers\Teacher\DashboardController::class, 'profile'])->name('profile');
        Route::post('profileupdate', [App\Http\Controllers\Teacher\DashboardController::class, 'profileupdate'])->name('profileupdate');
        Route::post('otherupdate', [App\Http\Controllers\Teacher\DashboardController::class, 'otherupdate'])->name('otherupdate');

        Route::get('allteacher', [App\Http\Controllers\Teacher\DashboardController::class, 'allteacher'] )->name('allteacher');
        Route::get('allclasses', [App\Http\Controllers\Teacher\DashboardController::class, 'allclasses'] )->name('allclasses');
         Route::get('superapprover/allclasses', [App\Http\Controllers\Teacher\DashboardController::class, 'supallclasses'] )->name('supallclasses');
        Route::get('cancelrequest', [App\Http\Controllers\Teacher\DashboardController::class, 'cancelrequestList'] )->name('cancelrequest');
        Route::get('approve/{id}', [App\Http\Controllers\Teacher\DashboardController::class, 'approve'] )->name('approve');
        Route::post('reject', [App\Http\Controllers\Teacher\DashboardController::class, 'reject'] )->name('reject');
       
        Route::get('sadashboard', [App\Http\Controllers\Teacher\DashboardController::class, 'sadashboard'] )->name('sadashboard');
        // Route::get('adashboard', [App\Http\Controllers\Teacher\DashboardController::class, 'adashboard'] )->name('adashboard');
        Route::post('onboard-teacher', [App\Http\Controllers\Teacher\DashboardController::class, 'onboardTeacher'])->name('onboard-teacher');
       

        Route::get('class-request', [App\Http\Controllers\Teacher\DashboardController::class, 'classRequestForm'])->name('class-request');
        Route::post('class-request', [App\Http\Controllers\Teacher\DashboardController::class, 'createClassRequest'])->name('class-request');
         Route::post('send-payment-link', [App\Http\Controllers\Teacher\DashboardController::class, 'sendPaymentlink'])->name('sendpaymentlink');
        Route::post('get-program-info', [App\Http\Controllers\Teacher\DashboardController::class, 'getProgramInfo'])->name('get-program-info');
        
        Route::get('class-detail/{id}/{req}', [App\Http\Controllers\Teacher\DashboardController::class, 'classDetail'])->name('class-detail');

        Route::get('class/{id}/edit/{class}',[App\Http\Controllers\Teacher\DashboardController::class, 'classeditform'])->name('edit-class');
        Route::get('class/{id}/duplicate/{class}',[App\Http\Controllers\Teacher\DashboardController::class, 'classduplicateform'])->name('duplicate-class');
        Route::post('class/{id}/{class}',[App\Http\Controllers\Teacher\DashboardController::class, 'classrequestupdate'])->name('class-request-upadate');
        Route::post('deleteclass/{id}/{class}',[App\Http\Controllers\Teacher\DashboardController::class, 'classrequestdelete'])->name('class-request-delete');
        Route::post('updatepassword',[App\Http\Controllers\Teacher\DashboardController::class, 'updatepassword'])->name('updatepassword');
        Route::get('getProgramType/{id}',[App\Http\Controllers\Teacher\DashboardController::class, 'getProgramType'])->name('getProgramType');
        Route::post('cancelRequest',[App\Http\Controllers\Teacher\DashboardController::class, 'cancelRequest'])->name('cancelRequest');
        Route::get('participantlist/{id}/list',[App\Http\Controllers\Teacher\DashboardController::class, 'participantlist'])->name('participantlist');
        Route::get('exportxlsx/{id}/{name}',[App\Http\Controllers\Teacher\DashboardController::class, 'exportxlsx'])->name('exportxlsx');     
        Route::get('exportchildxlsx/{id}/{name}',[App\Http\Controllers\Teacher\DashboardController::class, 'exportchildxlsx'])->name('exportchildxlsx');    
        Route::post('profileimage',[App\Http\Controllers\Teacher\DashboardController::class, 'profileimage'])->name('profileimage');
        Route::post('deactivate',[App\Http\Controllers\Teacher\DashboardController::class, 'deactivate'])->name('deactivate');
        Route::get('deactivateteacheraccount/{id}',[App\Http\Controllers\Teacher\DashboardController::class, 'deactivateteacheraccount'])->name('deactivateteacheraccount');
        

    });

});
