<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Citas;

class CitassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Citas::create([
        "title" => "Mi primera frase",
        "message" => "Esta es mi primera frase",
        "realPublicationYear" => "2023",
        "autor" =>"Pepe",
        'expiration' => '2022-10-15',
        'user_id' => User::all()->random()->id,
        ]);
    }
}
