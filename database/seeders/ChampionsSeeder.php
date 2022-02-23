<?php

namespace Database\Seeders;

use App\Models\Champion;
use Illuminate\Database\Seeder;

class ChampionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents("http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion.json") or die("failed");
        $jsondecoded = json_decode($json);

        foreach ($jsondecoded->data as $champion) {
            Champion::create([
                "id" => $champion->key,
                "name" => $champion->name,
                "title" => $champion->title,
                "blurb" => $champion->blurb,
                "imageFull" => 'https://ddragon.leagueoflegends.com/cdn/12.2.1/img/champion/' . $champion->image->full,
            ]);
        }
    }
}
