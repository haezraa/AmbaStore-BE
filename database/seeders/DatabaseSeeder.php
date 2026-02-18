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

        $genshin = Game::create([
            'nama' => 'Genshin Impact',
            'publisher' => 'HoYoverse',
            'satuan' => 'Genesis Crystals',
            'input_type' => 'server_id',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Fbbcbed30-004a-490e-80da-6da748fe302f.jpg&w=1920&q=75',
            'deskripsi' => 'Isi Genesis Crystal buat Gacha Archon!'
        ]);
        Nominal::create(['game_id' => $genshin->id, 'kategori' => 'Genesis Crystals', 'jumlah' => '60 Genesis Crystals', 'harga' => 16000]);
        Nominal::create(['game_id' => $genshin->id, 'kategori' => 'Genesis Crystals', 'jumlah' => '300+30 Genesis Crystals', 'harga' => 79000]);
        Nominal::create(['game_id' => $genshin->id, 'kategori' => 'Membership', 'jumlah' => 'Welkin Moon', 'harga' => 79000]);

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
        Nominal::create(['game_id' => $hsr->id, 'kategori' => 'Shards', 'jumlah' => '60 Oneiric Shards', 'harga' => 16000]);
        Nominal::create(['game_id' => $hsr->id, 'kategori' => 'Membership', 'jumlah' => 'Express Supply Pass', 'harga' => 79000]);

        $pubg = Game::create([
            'nama' => 'PUBG Mobile',
            'publisher' => 'Level Infinite',
            'satuan' => 'UC',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Fb94ea08a-6890-4dfd-8073-7b8479722504.png&w=1920&q=75',
            'deskripsi' => 'Top up UC resmi'
        ]);
        Nominal::create(['game_id' => $pubg->id, 'kategori' => 'UC', 'jumlah' => '60 UC', 'harga' => 14000]);
        Nominal::create(['game_id' => $pubg->id, 'kategori' => 'Bundles', 'jumlah' => 'Royale Pass', 'harga' => 150000]);

        $wuwa = Game::create([
            'nama' => 'Wuthering Waves',
            'publisher' => 'Kuro Games',
            'satuan' => 'Lunites',
            'input_type' => 'server_id',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fwutheringwaves-ezgif.com-optijpeg.jpg&w=1920&q=75',
            'deskripsi' => 'Top up Lunites buat dapetin Resonator bintang 5'
        ]);
        // Kategori: Lunites
        Nominal::create(['game_id' => $wuwa->id, 'kategori' => 'Lunites', 'jumlah' => '60 Lunites', 'harga' => 15000]);
        Nominal::create(['game_id' => $wuwa->id, 'kategori' => 'Lunites', 'jumlah' => '300+30 Lunites', 'harga' => 75000]);
        // Kategori: Membership
        Nominal::create(['game_id' => $wuwa->id, 'kategori' => 'Membership', 'jumlah' => 'Lunite Subscription', 'harga' => 75000]);

        $df = Game::create([
            'nama' => 'Delta Force',
            'publisher' => 'Team Jade',
            'satuan' => 'Delta Coins',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fdeltaforcegarenafix-ezgif.com-optijpeg.jpg&w=1920&q=75',
            'deskripsi' => 'Siap tempur dengan skin operator terbaru'
        ]);
        Nominal::create(['game_id' => $df->id, 'kategori' => 'Coins', 'jumlah' => '100 Delta Coins', 'harga' => 15000]);
        Nominal::create(['game_id' => $df->id, 'kategori' => 'Coins', 'jumlah' => '500 Delta Coins', 'harga' => 75000]);
        Nominal::create(['game_id' => $df->id, 'kategori' => 'Membership', 'jumlah' => 'Battle Pass Premium', 'harga' => 150000]);

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
        Nominal::create(['game_id' => $codm->id, 'kategori' => 'Membership', 'jumlah' => 'Battle Pass', 'harga' => 80000]);

        $coc = Game::create([
            'nama' => 'Clash of Clans',
            'publisher' => 'Supercell',
            'satuan' => 'Gems',
            'input_type' => 'uid_only',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F41e1b5a0-ffac-494f-8104-8bcfbb0de9cb.webp&w=1920&q=75',
            'deskripsi' => 'Beli Gems buat cepetin upgrade Town Hall'
        ]);
        Nominal::create(['game_id' => $coc->id, 'kategori' => 'Gems', 'jumlah' => '80 Gems', 'harga' => 15000]);
        Nominal::create(['game_id' => $coc->id, 'kategori' => 'Gems', 'jumlah' => '500 Gems', 'harga' => 75000]);
        Nominal::create(['game_id' => $coc->id, 'kategori' => 'Membership', 'jumlah' => 'Gold Pass', 'harga' => 99000]);

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
