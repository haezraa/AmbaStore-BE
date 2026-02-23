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
        ]);

        $gameName = $request->game_name;
        $userId = $request->user_id;
        $zoneId = $request->zone_id;
        $serverId = $request->server_id;

        if ($gameName === 'Free Fire') {
            try {
                $response = Http::get("https://gopay.co.id/games/v1/order/prepare/FREEFIRE?userId={$userId}");
                $data = $response->json();

                if (isset($data['data']) && !empty($data['data'])) {
                    return response()->json([
                        'sukses' => true,
                        'nickname' => urldecode($data['data'])
                    ]);
                }
                return response()->json(['sukses' => false, 'pesan' => 'ID tidak ditemukan!'], 404);
            } catch (\Exception $e) {
                return response()->json(['sukses' => false, 'pesan' => 'Server sedang gangguan!'], 500);
            }
        }

        $body = [];
        $idStr = (string)$userId;

        switch ($gameName) {
            case 'Mobile Legends':
                $body = [
                    'voucherPricePoint.id' => 4150,
                    'voucherPricePoint.price' => 1579,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zoneId,
                    'voucherTypeName' => 'MOBILE_LEGENDS',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Genshin Impact':
                $sv = '';
                if (str_starts_with($idStr, '18') || $idStr[0] === '8') $sv = 'os_asia';
                elseif ($idStr[0] === '6') $sv = 'os_usa';
                elseif ($idStr[0] === '7') $sv = 'os_euro';
                elseif ($idStr[0] === '9') $sv = 'os_cht';

                $body = [
                    'voucherPricePoint.id' => 116054,
                    'voucherPricePoint.price' => 16500,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $sv,
                    'voucherTypeName' => 'GENSHIN_IMPACT',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Call of Duty: Mobile':
                $body = [
                    'voucherPricePoint.id' => 46129,
                    'voucherPricePoint.price' => 10000,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'CALL_OF_DUTY',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Valorant':
                $body = [
                    'voucherPricePoint.id' => 973634,
                    'voucherPricePoint.price' => 56000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'VALORANT',
                    'voucherTypeId' => 109,
                    'gvtId' => 139,
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Honkai: Star Rail':
                $sv = '';
                if ($idStr[0] === '6') $sv = 'prod_official_usa';
                elseif ($idStr[0] === '7') $sv = 'prod_official_eur';
                elseif ($idStr[0] === '8') $sv = 'prod_official_asia';
                elseif ($idStr[0] === '9') $sv = 'prod_official_cht';

                $body = [
                    'voucherPricePoint.id' => 855316,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $sv,
                    'voucherTypeName' => 'HONKAI_STAR_RAIL',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Zenless Zone Zero':
                $sv = '';
                $prefix = substr($idStr, 0, 2);
                if ($prefix === '10') $sv = 'prod_gf_us';
                elseif ($prefix === '13') $sv = 'prod_gf_jp';
                elseif ($prefix === '15') $sv = 'prod_gf_eu';
                elseif ($prefix === '17') $sv = 'prod_gf_sg';

                $body = [
                    'voucherPricePoint.id' => 946399,
                    'voucherPricePoint.price' => 16000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $sv,
                    'voucherTypeName' => 'ZENLESS_ZONE_ZERO',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Magic Chess: Go Go':
                $body = [
                    'voucherPricePoint.id' => 997117,
                    'voucherPricePoint.price' => 1579,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $zoneId,
                    'voucherTypeName' => '106-MAGIC_CHESS',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Punishing: Gray Raven':
                $sv = '';
                $zoneLower = strtolower($zoneId ?: $serverId ?: '');
                if (in_array($zoneLower, ['ap', 'asia', 'asia-pacific'])) $sv = '5000';
                elseif (in_array($zoneLower, ['eu', 'europe'])) $sv = '5001';
                elseif (in_array($zoneLower, ['na', 'america', 'north america'])) $sv = '5002';

                $body = [
                    'voucherPricePoint.id' => 259947,
                    'voucherPricePoint.price' => 15000,
                    'voucherPricePoint.variablePrice' => 0,
                    'user.userId' => $userId,
                    'user.zoneId' => $sv,
                    'voucherTypeName' => 'PUNISHING_GRAY_RAVEN',
                    'shopLang' => 'id_ID'
                ];
                break;

            case 'Arena of Valor':
                $body = [
                    'voucherPricePoint.id' => 7946,
                    'voucherPricePoint.price' => 10000,
                    'user.userId' => $userId,
                    'voucherTypeName' => 'AOV',
                    'shopLang' => 'id_ID'
                ];
                break;

            default:
                return response()->json(['sukses' => false, 'pesan' => 'Game belum disupport buat cek nickname!'], 400);
        }

        try {
            // api codashop
            $response = Http::asForm()->post('https://order-sg.codashop.com/initPayment.action', $body);
            $data = $response->json();

            if ($gameName === 'Valorant' && isset($data['errorCode']) && $data['errorCode'] === -200) {
                return response()->json([
                    'sukses' => true,
                    'nickname' => $userId
                ]);
            }

            if ($response->successful() && isset($data['success']) && $data['success'] == true) {

                $username = $data['confirmationFields']['username']
                            ?? $data['confirmationFields']['roles'][0]['role']
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
                'pesan' => 'Gagal konek ke server Codashop!'
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
