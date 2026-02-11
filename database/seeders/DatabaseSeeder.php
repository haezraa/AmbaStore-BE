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
            'satuan' => 'Diamonds',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/cf/Mobile_Legends_Bang_Bang_logo.png/220px-Mobile_Legends_Bang_Bang_logo.png',
            'deskripsi' => 'Top up Diamond ML aman & legal 100%'
        ]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => '86 Diamonds', 'harga' => 20000]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => '172 Diamonds', 'harga' => 40000]);
        Nominal::create(['game_id' => $ml->id, 'jumlah' => 'Starlight Member', 'harga' => 145000]);

        $valo = Game::create([
            'nama' => 'Valorant',
            'satuan' => 'Valorant Points (VP)',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Valorant_logo_-_pink_color_version.svg',
            'deskripsi' => 'Beli VP buat skin Vandal terbaru'
        ]);
        Nominal::create(['game_id' => $valo->id, 'jumlah' => '125 VP', 'harga' => 15000]);
        Nominal::create(['game_id' => $valo->id, 'jumlah' => '420 VP', 'harga' => 50000]);
        Nominal::create(['game_id' => $valo->id, 'jumlah' => '700 VP', 'harga' => 80000]);

        $ff = Game::create([
            'nama' => 'Free Fire',
            'satuan' => 'Diamonds',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/en/a/a6/Free_Fire_logo.png',
            'deskripsi' => 'Booyah pake diamond murah!'
        ]);
        Nominal::create(['game_id' => $ff->id, 'jumlah' => '100 Diamonds', 'harga' => 16000]);
        Nominal::create(['game_id' => $ff->id, 'jumlah' => '210 Diamonds', 'harga' => 32000]);
    }
}
