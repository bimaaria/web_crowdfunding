<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Events\RegenerateOtpCodeEvent;

class RegenerateOtpCodeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        $user->generate_otp_code();

        $data['user'] = $user;

        event(new RegenerateOtpCodeEvent($user));

        return response()->json([
            'response_code' => '00',
            'response_message' => 'Kode OTP berhasil dikirim. Cek ulang email anda',
            'data' => $data
        ]);
    }
}
