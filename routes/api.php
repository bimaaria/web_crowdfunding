<?php

// Route::namespace('Auth')->group(function(){
//     Route::post('register', 'RegisterController');
//     Route::post('login', 'LoginController');
//     Route::post('verification', 'VerificationController');
//     Route::post('regenerate_otp', 'RegenerateOtpCodeController');
// });

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'api', 
    'prefix' => 'auth', 
    'namespace' => 'Auth'
], function () {
    Route::post('register', 'RegisterController');
    Route::post('regenerate-otp', 'RegenerateOtpCodeController');
    Route::post('verification', 'VerificationController');
    Route::post('update-password', 'UpdatePasswordController');
});

