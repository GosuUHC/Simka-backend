<?php

namespace Database\Seeders;

use App\Models\Compilation;
use Illuminate\Database\Seeder;

class CompilationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urlPath = url()->current();

        $compilationsData = [
            [
                "name" => "недорогой интернет",
                "image" => "$urlPath/storage/images/2024/comp/cheap.png",
            ],
            [
                "name" => "скоростной интернет",
                "image" => "$urlPath/storage/images/2024/comp/speed.png",
            ],
            [
                "name" => "интернет + ТВ",
                "image" => "$urlPath/storage/images/2024/comp/internetTv.png",
            ],
            [
                "name" => "интернет + ТВ + сим-карта",
                "image" => "$urlPath/storage/images/2024/comp/internetTvSim.png",
            ],
            [
                "name" => "сим-карты",
                "image" => "$urlPath/storage/images/2024/comp/sim.png",
            ],
            [
                "name" => "онлайн-кинотеатры",
                "image" => "$urlPath/storage/images/2024/comp/onlineCinema.png",
            ],
            [
                "name" => "в офис (для бизнеса)",
                "image" => "$urlPath/storage/images/2024/comp/officeBusiness.png",
            ],
            [
                "name" => "умные колонки",
                "image" => "$urlPath/storage/images/2024/comp/smartSpeakers.png",
            ],
            [
                "name" => "видеонаблюдение",
                "image" => "$urlPath/storage/images/2024/comp/surveillance.png",
            ],
        ];

        foreach ($compilationsData as $data) {
            Compilation::firstOrCreate($data);
        }
    }
}
