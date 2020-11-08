<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\OtpCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $otp = OtpCode::where('otp', $request->otp)->first();

        if (!$otp) {
            return response()->json([
                'response_code' => '01',
                'response_message' => 'Kode OTP salah',
            ]);
        } 

        $now = Carbon::now();

        if($now > $otp->valid_until){
            return response()->json([
                'response_code' => '01',
                'response_message' => 'Kode OTP sudah kadaluwarsa. Silahkan daftar lagi'
            ]);
        }

        return response()->json([
            'response_code' => '00',
            'response_message' => 'Kode OTP berhasil diverifikasi'
        ]);
    }
}
