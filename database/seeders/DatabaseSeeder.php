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
            'gambar' => 'https://i.pinimg.com/736x/b8/a1/07/b8a1072c41fecde9c6f726b739cc2bb6.jpg',
            'deskripsi' => 'Top up Diamond ML aman & legal 100%'
        ]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => '86 Diamonds', 'harga' => 20000]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => '172 Diamonds', 'harga' => 40000]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => 'Weekly Diamond Pass', 'harga' => 28000]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => 'Starlight Member', 'harga' => 145000]);

        $hok = Game::create([
            'nama' => 'Honor of Kings',
            'publisher' => 'Level Infinite',
            'satuan' => 'Tokens',
            'gambar' => 'https://pointgo.id/assets/images/games/1758700472_34271a0376ef99672d1f.webp',
            'deskripsi' => 'Top up Tokens HoK Global murah meriah'
        ]);
        Nominal::create(['game_id' => $hok->id, 'jumlah' => '80 Tokens', 'harga' => 14000]);
        Nominal::create(['game_id' => $hok->id, 'jumlah' => '240 Tokens', 'harga' => 42000]);
        Nominal::create(['game_id' => $hok->id, 'jumlah' => 'Weekly Card', 'harga' => 30000]);

        $genshin = Game::create([
            'nama' => 'Genshin Impact',
            'publisher' => 'HoYoverse',
            'satuan' => 'Genesis Crystals',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Fbbcbed30-004a-490e-80da-6da748fe302f.jpg&w=1920&q=75',
            'deskripsi' => 'Isi Genesis Crystal buat Gacha Archon!'
        ]);
        Nominal::create(['game_id' => $genshin->id, 'jumlah' => '60 Genesis Crystals', 'harga' => 16000]);
        Nominal::create(['game_id' => $genshin->id, 'jumlah' => '300+30 Genesis Crystals', 'harga' => 79000]);
        Nominal::create(['game_id' => $genshin->id, 'jumlah' => 'Welkin Moon', 'harga' => 79000]);

        $hsr = Game::create([
            'nama' => 'Honkai: Star Rail',
            'publisher' => 'HoYoverse',
            'satuan' => 'Oneiric Shards',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Feb34737a-d6c4-4292-8a43-da5892a1dde2.webp&w=1920&q=75',
            'deskripsi' => 'Top up Shard buat Kafka & Firefly'
        ]);
        Nominal::create(['game_id' => $hsr->id, 'jumlah' => '60 Oneiric Shards', 'harga' => 16000]);
        Nominal::create(['game_id' => $hsr->id, 'jumlah' => 'Express Supply Pass', 'harga' => 79000]);

        $wuwa = Game::create([
            'nama' => 'Wuthering Waves',
            'publisher' => 'Kuro Games',
            'satuan' => 'Lunites',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fwutheringwaves-ezgif.com-optijpeg.jpg&w=1920&q=75',
            'deskripsi' => 'Top up Lunites buat dapetin Resonator bintang 5'
        ]);
        Nominal::create(['game_id' => $wuwa->id, 'jumlah' => '60 Lunites', 'harga' => 15000]);
        Nominal::create(['game_id' => $wuwa->id, 'jumlah' => 'Lunite Subscription', 'harga' => 75000]);

        $df = Game::create([
            'nama' => 'Delta Force',
            'publisher' => 'Team Jade',
            'satuan' => 'Delta Coins',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.ourastore.com%2Fourastore.com%2Fproduct%2Fdeltaforcegarenafix-ezgif.com-optijpeg.jpg&w=1920&q=75',
            'deskripsi' => 'Siap tempur dengan skin operator terbaru'
        ]);
        Nominal::create(['game_id' => $df->id, 'jumlah' => '100 Delta Coins', 'harga' => 15000]);
        Nominal::create(['game_id' => $df->id, 'jumlah' => 'Battle Pass Premium', 'harga' => 150000]);

        $codm = Game::create([
            'nama' => 'Call of Duty: Mobile',
            'publisher' => 'Garena',
            'satuan' => 'CP (COD Points)',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F741e9167-79ff-4e4d-bd71-f9ddb26b173b.jpg&w=1920&q=75',
            'deskripsi' => 'Top up CP murah buat draw Lucky Draw'
        ]);
        Nominal::create(['game_id' => $codm->id, 'jumlah' => '53 CP', 'harga' => 10000]);
        Nominal::create(['game_id' => $codm->id, 'jumlah' => '321 CP', 'harga' => 50000]);

        $lol = Game::create([
            'nama' => 'League of Legends',
            'publisher' => 'Riot Games',
            'satuan' => 'RP (Riot Points)',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Ffed158d2-cd7e-42d1-b51a-efe4ac4146ae.webp&w=1920&q=75',
            'deskripsi' => 'Beli skin Champion favoritmu sekarang'
        ]);
        Nominal::create(['game_id' => $lol->id, 'jumlah' => '250 RP', 'harga' => 45000]);
        Nominal::create(['game_id' => $lol->id, 'jumlah' => '1350 RP', 'harga' => 150000]);

        $coc = Game::create([
            'nama' => 'Clash of Clans',
            'publisher' => 'Supercell',
            'satuan' => 'Gems',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F41e1b5a0-ffac-494f-8104-8bcfbb0de9cb.webp&w=1920&q=75',
            'deskripsi' => 'Beli Gems buat cepetin upgrade Town Hall'
        ]);
        Nominal::create(['game_id' => $coc->id, 'jumlah' => '80 Gems', 'harga' => 15000]);
        Nominal::create(['game_id' => $coc->id, 'jumlah' => 'Gold Pass', 'harga' => 99000]);

        $pubg = Game::create([
            'nama' => 'PUBG Mobile',
            'publisher' => 'Level Infinite',
            'satuan' => 'UC (Unknown Cash)',
            'gambar' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2Fb94ea08a-6890-4dfd-8073-7b8479722504.png&w=1920&q=75',
            'deskripsi' => 'Top up UC resmi dan legal'
        ]);
        Nominal::create(['game_id' => $pubg->id, 'jumlah' => '60 UC', 'harga' => 14000]);
        Nominal::create(['game_id' => $pubg->id, 'jumlah' => '325 UC', 'harga' => 70000]);
        Nominal::create(['game_id' => $pubg->id, 'jumlah' => '660 UC', 'harga' => 140000]);
    }
}
