<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Facades\file;

class playerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file::get(path: 'database/json/player.json');
        $data = collect(json_decode($json));
        foreach ($data as $obj) {
            Player::create([
                'name' => $obj->name,
                'age' => $obj->age,
                'role' => $obj->role,
                'runs' => $obj->runs,
                'wickets' => $obj->wickets,
                'country' => $obj->country
            ]);
        }

        // Player::create([
        //     'name'=>'virat kohli',
        //     'age'=>34,
        //     'role'=>'bestman',
        //     'runs'=>14000,
        //     'wickets'=>10,
        //     'country'=>'bharat'
        // ]);
    }
}
