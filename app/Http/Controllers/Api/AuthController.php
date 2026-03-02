<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // === FUNGSI REGISTER ===
    public function register(Request $request)
    {
        // 1. Validasi data dari React
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'whatsapp' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed', // confirmed akan ngecek password_confirmation otomatis
        ]);

        // 2. Simpan user ke database
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password),
        ]);

        // 3. Bikin Token Sanctum buat React
        $token = $user->createToken('auth_token')->plainTextToken;

        // 4. Balikin respon sukses ke React
        return response()->json([
            'sukses' => true,
            'pesan' => 'Pendaftaran berhasil!',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    // === FUNGSI LOGIN ===
    public function login(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Cek apakah email dan password cocok
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'sukses' => false,
                'message' => 'Kombinasi email dan kata sandi salah.'
            ], 401);
        }

        // 3. Ambil data user yang berhasil login
        $user = User::where('email', $request->email)->firstOrFail();

        // 4. Bikin Token Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Balikin token ke React
        return response()->json([
            'sukses' => true,
            'pesan' => 'Berhasil masuk!',
            'user' => $user,
            'token' => $token
        ]);
    }

    // === FUNGSI LOGOUT ===
    public function logout(Request $request)
    {
        // Hapus token yang lagi dipake
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'sukses' => true,
            'pesan' => 'Berhasil keluar.'
        ]);
    }
}
