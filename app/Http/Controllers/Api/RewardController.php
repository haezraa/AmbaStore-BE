<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RewardController extends Controller
{
    public function claimCoin(Request $request)
    {
        $user = $request->user();

        $today = Carbon::today();

        $lastClaim = $user->last_claim_date ? Carbon::parse($user->last_claim_date)->startOfDay() : null;

        if ($lastClaim && $lastClaim->equalTo($today)) {
            return response()->json([
                'sukses' => false,
                'pesan' => 'Kamu sudah klaim hari ini. Kembali lagi besok!'
            ], 400);
        }

        if ($lastClaim && $lastClaim->equalTo($today->copy()->subDay())) {
            $user->login_streak += 1;

            if ($user->login_streak > 7) {
                $user->login_streak = 1;
            }
        } else {
            $user->login_streak = 1;
        }

        $koinDapat = ($user->login_streak == 7) ? 2 : 1;

        $user->amba_coin += $koinDapat;
        $user->last_claim_date = now();
        $user->save();

        return response()->json([
            'sukses' => true,
            'pesan' => 'Berhasil klaim!',
            'data' => [
                'koin_didapat' => $koinDapat,
                'total_koin' => $user->amba_coin,
                'streak_hari_ke' => $user->login_streak
            ]
        ]);
    }
}
