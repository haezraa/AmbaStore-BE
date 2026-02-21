<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\Game; // Panggil model Game
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return response()->json([
            'sukses' => true,
            'pesan'  => 'Ini daftar semua game',
            'data'   => $games
        ]);
    }

    public function checkNickname(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'zone_id' => 'nullable'
        ]);

        $userId = $request->user_id;
        $zoneId = $request->zone_id;

        /* url cek niknem  */
        $url = "https://v1.apigames.id/merchant/v2/cek-username/mobilelegend?user_id={$userId}&zone_id={$zoneId}";

        try {
            $response = Http::get($url);
            $data = $response->json();

            if ($response->successful() && isset($data['data']['username'])) {
                return response()->json([
                    'sukses' => true,
                    'nickname' => $data['data']['username']
                ]);
            } else {
                return response()->json([
                    'sukses' => false,
                    'pesan' => 'ID tidak ditemukan'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'sukses' => false,
                'pesan' => 'Server sedang gangguan'
            ], 500);
        }
    }

    public function show($id)
    {
        $game = Game::with('nominals')->find($id);

        if (!$game) {
            return response()->json([
                'sukses' => false,
                'pesan'  => 'game tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'sukses' => true,
            'pesan'  => 'Detail Game berhasil ditarik',
            'data'   => $game
        ]);
    }
}
