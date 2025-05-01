<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'name' => 'San Valentino',
                'slug' => 'san-valentino',
                'date' => Carbon::create(2025, 2, 14),
                'content' => 'Sconto del 20% sui nostri bouquet romantici! ❤️ Offerta valida fino al 14 febbraio.',
                'image_path' => 'events/san-valentino.jpg',
                'coupon_code' => 'LOVE2025',
                'active' => true
            ],
            [
                'name' => 'Festa della Mamma',
                'slug' => 'festa-mamma',
                'date' => Carbon::create(2025, 5, 11),
                'content' => 'Regala un fiore alla mamma! 🌸 15% di sconto su tutti i nostri arrangiamenti floreali.',
                'image_path' => 'events/festa-mamma.jpg',
                'coupon_code' => 'MAMMA15',
                'active' => true
            ],
            [
                'name' => 'Natale',
                'slug' => 'natale',
                'date' => Carbon::create(2025, 12, 25),
                'content' => 'Centrotavola natalizi con il 25% di sconto! 🎄 Prenota entro il 20 dicembre.',
                'image_path' => 'events/natale.jpg',
                'coupon_code' => 'XMAS25',
                'active' => true
            ],
            [
                'name' => 'Pasqua',
                'slug' => 'pasqua',
                'date' => Carbon::create(2025, 4, 20),
                'content' => 'Composizioni pasquali fresche e colorate! 🐣 10% di sconto con questo coupon.',
                'image_path' => 'events/pasqua.jpg',
                'coupon_code' => 'EASTER10',
                'active' => false // Esempio di evento disattivato
            ]
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}