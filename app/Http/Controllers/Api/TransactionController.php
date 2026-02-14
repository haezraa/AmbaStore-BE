<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $invoice = 'TRX-' . strtoupper(Str::random(6));

        $transaction = Transaction::create([
            'invoice_code' => $invoice,
            'game_name' => $request->game_name,
            'game_publisher' => $request->game_publisher,
            'item_name' => $request->item_name,
            'user_id_game' => $request->user_id,
            'zone_id' => $request->zone_id,
            'server_id' => $request->server_id,
            'payment_method' => $request->payment_method,
            'price' => $request->price,
            'tax' => $request->tax,
            'total_price' => $request->total_price,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'status' => 'PENDING',
        ]);

        return response()->json([
            'sukses' => true,
            'pesan' => 'Transaksi berhasil dibuat!',
            'data' => $transaction
        ]);
    }
}
