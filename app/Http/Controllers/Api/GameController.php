<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\Game;
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
            'game_name' => 'required',
            'user_id' => 'required',
            'zone_id' => 'nullable',
            'server_id' => 'nullable'
        ]);

        $gameName = $request->game_name;
        $userId = $request->user_id;
        $zone = $request->zone_id ?: $request->server_id ?: '';

        $body = [];

        // parameter tiap game
        switch ($gameName) {
            case 'Mobile Legends':
                $body = [
                    'voucherPricePoint.id' => 4150,
                    'voucherPricePoint.price' => 1579,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zone,
                    'voucherTypeName' => 'MOBILE_LEGENDS',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Free Fire':
                $body = [
                    'voucherPricePoint.id' => 8050,
                    'voucherPricePoint.price' => 1000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'FREEFIRE',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Call of Duty: Mobile':
                $body = [
                    'voucherPricePoint.id' => 25655,
                    'voucherPricePoint.price' => 5000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'CALL_OF_DUTY',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Genshin Impact':
                $body = [
                    'voucherPricePoint.id' => 116054,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zone, // server: asia
                    'voucherTypeName' => 'GENSHIN_IMPACT',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Valorant':
                $body = [
                    'voucherPricePoint.id' => 137456,
                    'voucherPricePoint.price' => 15000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'VALORANT',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Honkai: Star Rail':
                $body = [
                    'voucherPricePoint.id' => 295484,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zone,
                    'voucherTypeName' => 'HONKAI_STAR_RAIL',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Zenless Zone Zero':
                $body = [
                    'voucherPricePoint.id' => 377517,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zone,
                    'voucherTypeName' => 'ZENLESS_ZONE_ZERO',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Magic Chess: Go Go':
                $body = [
                    'voucherPricePoint.id' => 420063,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zone,
                    'voucherTypeName' => 'MAGIC_CHESS_GO_GO',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Punishing: Gray Raven':
                $body = [
                    'voucherPricePoint.id' => 141870,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'PUNISHING_GRAY_RAVEN',
                    'shopLang' => 'id_ID'
                ];
                break;
            case 'Arena of Valor':
                $body = [
                    'voucherPricePoint.id' => 10543,
                    'voucherPricePoint.price' => 1000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'ARENA_OF_VALOR',
                    'shopLang' => 'id_ID'
                ];
                break;
            default:
                return response()->json(['sukses' => false, 'pesan' => 'Game tidak ditemukan'], 400);
        }

        try {
            // api codashop
            $response = Http::asForm()->post('https://order-sg.codashop.com/initPayment.action', $body);
            $data = $response->json();

            if ($response->successful() && isset($data['success']) && $data['success'] == true) {

                $username = $data['confirmationFields']['username']
                            ?? $data['confirmationFields']['roles'][0]['roleName']
                            ?? null;

                if ($username) {
                    return response()->json([
                        'sukses' => true,
                        'nickname' => urldecode($username)
                    ]);
                }
            }

            $errorMsg = $data['errorMsg'] ?? 'ID atau Server tidak ditemukan!';

            return response()->json([
                'sukses' => false,
                'pesan' => urldecode($errorMsg)
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'sukses' => false,
                'pesan' => 'Gagal konek ke server!'
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
