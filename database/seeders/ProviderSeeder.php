<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $providersData = [[
            'name' => 'Ростелеком',
            'phone' => '88005553535',
            'tech_support_phone' => null,
            'rating_overall' => 3.45,
            'rating_connection' => 3.56,
            'rating_stability' => 3.56,
            'rating_speed' => 3.33,
            'rating_service' => 3.33,
            'description' => 'Мобильная связь, интернет, роутер, сим-карта, Мобильная связь',
            'order' => 1,
            'image' => 'storage/images/2024/rostelecom.png',
            'plans_count' => 3,
            'promotions_count' => 1,
            'reviews_count' => 6,
            'min_price' => 200,
            'min_internet_speed_value' => 100,
            'min_internet_speed_units' => 'Мбит/с',
            'max_internet_speed_value' => 2,
            'max_internet_speed_units' => 'Гбит/с',
            'card_bg_color' => '#b429db',
        ]];

        foreach ($providersData as $data) {
            Provider::create($data);
        }
    }

}
