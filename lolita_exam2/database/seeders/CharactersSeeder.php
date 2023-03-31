<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//import model
use App\Models\characters;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $charizard = new characters;
        $charizard -> name = "Charizard"; 
        $charizard -> height = "1.7";
        $charizard -> weight = "90.5";
        $charizard -> hp = "78";
        $charizard -> image = "https://img.pokemondb.net/artwork/large/charizard.jpg";
        $charizard -> save();
        
        $dragonite = new characters;
        $dragonite -> name = "Dragonite"; 
        $dragonite -> height = "2.2";
        $dragonite -> weight = "210";
        $dragonite -> hp = "91";
        $dragonite -> image = "https://img.pokemondb.net/artwork/large/dragonite.jpg";
        $dragonite -> save();
    }
}
