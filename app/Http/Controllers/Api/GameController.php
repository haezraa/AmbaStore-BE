<?php

namespace App\Http\Controllers\Api;

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
