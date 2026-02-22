<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Nominal;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $ml = Game::create([
            'nama' => 'Mobile Legends',
            'publisher' => 'Moonton',
            'satuan' => 'Diamonds',
            'input_type' => 'id_zone',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2FMLBBIndofix-ezgif.com-optijpeg.jpg&w=1920&q=75',
            'deskripsi' => 'Top up Diamond ML aman & legal 100%'
        ]);
         Nominal::create(['game_id' => $ml->id, 'kategori' => 'Diamonds', 'jumlah' => '5 Diamonds', 'harga' => 1500]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Diamonds', 'jumlah' => '44 Diamonds', 'harga' => 11500]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Diamonds', 'jumlah' => '86 Diamonds', 'harga' => 23000]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Diamonds', 'jumlah' => '110 Diamonds', 'harga' => 31000]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Diamonds', 'jumlah' => '172 Diamonds', 'harga' => 47000]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Membership', 'jumlah' => 'Weekly Diamond Pass', 'harga' => 28000]);
        Nominal::create(['game_id' => $ml->id, 'kategori' => 'Membership', 'jumlah' => 'Twilight Pass', 'harga' => 150000]);

        $ff = Game::create([
            'nama' => 'Free Fire',
            'publisher' => 'Garena',
            'satuan' => 'Diamonds',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F2b2b481e-89fe-474f-a27d-be791df405cb.jpg&w=1920&q=75',
            'deskripsi' => 'Booyah pake diamond murah!'
        ]);
        Nominal::create(['game_id' => $ff->id, 'kategori' => 'Diamonds', 'jumlah' => '140 Diamonds', 'harga' => 20000]);
        Nominal::create(['game_id' => $ff->id, 'kategori' => 'Membership', 'jumlah' => 'Member Mingguan', 'harga' => 30000]);

        $codm = Game::create([
            'nama' => 'Call of Duty: Mobile',
            'publisher' => 'Garena',
            'satuan' => 'CP',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F741e9167-79ff-4e4d-bd71-f9ddb26b173b.jpg&w=1920&q=75',
            'deskripsi' => 'Top up CP murah buat draw Lucky Draw'
        ]);
        Nominal::create(['game_id' => $codm->id, 'kategori' => 'CP', 'jumlah' => '53 CP', 'harga' => 10000]);
        Nominal::create(['game_id' => $codm->id, 'kategori' => 'CP', 'jumlah' => '321 CP', 'harga' => 50000]);

        $genshin = Game::create([
            'nama' => 'Genshin Impact',
            'publisher' => 'HoYoverse',
            'satuan' => 'Genesis Crystals',
            'input_type' => 'server_id',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Fbbcbed30-004a-490e-80da-6da748fe302f.jpg&w=1920&q=75',
            'deskripsi' => 'Isi Genesis Crystal buat Gacha Archon!'
        ]);
        Nominal::create(['game_id' => $genshin->id, 'kategori' => 'Crystals', 'jumlah' => '60 Crystals', 'harga' => 16000]);
        Nominal::create(['game_id' => $genshin->id, 'kategori' => 'Membership', 'jumlah' => 'Welkin Moon', 'harga' => 79000]);

        $valo = Game::create([
            'nama' => 'Valorant',
            'publisher' => 'Riot Games',
            'satuan' => 'VP',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F7881fb56-29c7-4baa-9e1e-539615b1d0aa.jpg&w=1920&q=75',
            'deskripsi' => 'Beli VP buat skin Vandal terbaru'
        ]);
        Nominal::create(['game_id' => $valo->id, 'kategori' => 'Points', 'jumlah' => '125 VP', 'harga' => 15000]);
        Nominal::create(['game_id' => $valo->id, 'kategori' => 'Points', 'jumlah' => '700 VP', 'harga' => 80000]);

        $hsr = Game::create([
            'nama' => 'Honkai: Star Rail',
            'publisher' => 'HoYoverse',
            'satuan' => 'Oneiric Shards',
            'input_type' => 'server_id',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Feb34737a-d6c4-4292-8a43-da5892a1dde2.webp&w=1920&q=75',
            'deskripsi' => 'Gacha Seele & Kafka'
        ]);
        Nominal::create(['game_id' => $hsr->id, 'kategori' => 'Shards', 'jumlah' => '60 Shards', 'harga' => 16000]);
        Nominal::create(['game_id' => $hsr->id, 'kategori' => 'Membership', 'jumlah' => 'Express Supply Pass', 'harga' => 79000]);

        $zzz = Game::create([
            'nama' => 'Zenless Zone Zero',
            'publisher' => 'HoYoverse',
            'satuan' => 'Monochromes',
            'input_type' => 'server_id',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fzenlesszonezero-ezgif.com-optijpeg.jpg&w=1920&q=75', // Contoh gambar
            'deskripsi' => 'Top up buat dapetin agen S-Rank idamanmu!'
        ]);
        Nominal::create(['game_id' => $zzz->id, 'kategori' => 'Monochromes', 'jumlah' => '60 Monochromes', 'harga' => 16000]);
        Nominal::create(['game_id' => $zzz->id, 'kategori' => 'Membership', 'jumlah' => 'Inter-Knot Membership', 'harga' => 79000]);

        $mcgg = Game::create([
            'nama' => 'Magic Chess: Go Go',
            'publisher' => 'Moonton',
            'satuan' => 'Go Go Coins',
            'input_type' => 'id_zone',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fmagicchessgogo-ezgif.com-optijpeg.jpg&w=1920&q=75', // Contoh gambar
            'deskripsi' => 'Top up koin Magic Chess'
        ]);
        Nominal::create(['game_id' => $mcgg->id, 'kategori' => 'Coins', 'jumlah' => '100 Coins', 'harga' => 15000]);

        $pgr = Game::create([
            'nama' => 'Punishing: Gray Raven',
            'publisher' => 'Kuro Game',
            'satuan' => 'Rainbow Cards',
            'input_type' => 'uid_only',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Punishing_Gray_Raven_icon.png/220px-Punishing_Gray_Raven_icon.png', // Contoh
            'deskripsi' => 'Beli Rainbow Cards buat gacha Konstruk!'
        ]);
        Nominal::create(['game_id' => $pgr->id, 'kategori' => 'Cards', 'jumlah' => '5 Rainbow Cards', 'harga' => 16000]);

        $aov = Game::create([
            'nama' => 'Arena of Valor',
            'publisher' => 'Garena',
            'satuan' => 'Vouchers',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F8f5b89eb-2b87-4b7d-8153-29a3e5e4811a.png&w=1920&q=75',
            'deskripsi' => 'Top up Voucher AOV resmi'
        ]);
        Nominal::create(['game_id' => $aov->id, 'kategori' => 'Vouchers', 'jumlah' => '40 Vouchers', 'harga' => 10000]);

        $payments = [
            ['nama' => 'GoPay', 'kode' => 'gopay', 'kategori' => 'E-Wallet', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/1200px-Gopay_logo.svg.png'],
            ['nama' => 'DANA', 'kode' => 'dana', 'kategori' => 'E-Wallet', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/1200px-Logo_dana_blue.svg.png'],
            ['nama' => 'OVO', 'kode' => 'ovo', 'kategori' => 'E-Wallet', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/1200px-Logo_ovo_purple.svg.png'],
            ['nama' => 'QRIS', 'kode' => 'qris', 'kategori' => 'QR Code', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_QRIS.svg/1200px-Logo_QRIS.svg.png'],
            ['nama' => 'ShopeePay', 'kode' => 'shopeepay', 'kategori' => 'E-Wallet', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Shopee.svg/1200px-Shopee.svg.png'],
            ['nama' => 'BCA Virtual Account', 'kode' => 'bca_va', 'kategori' => 'Bank Transfer', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1200px-Bank_Central_Asia.svg.png'],
            ['nama' => 'Indomaret', 'kode' => 'indomaret', 'kategori' => 'Minimarket', 'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Logo_Indomaret.png/1200px-Logo_Indomaret.png'],
        ];

        foreach ($payments as $p) {
            \App\Models\Payment::create($p);
        }
    }
}
