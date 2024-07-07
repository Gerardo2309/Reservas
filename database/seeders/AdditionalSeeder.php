<?php

namespace Database\Seeders;

use App\Models\additional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adicionales = [
            'Round trip transportation in vans.',
            'Travelers insurance.',
            'Tequila tasting and Mixology of tequilas and handmade creams with an expert tequilero (we have 13 different flavors).',
            'Mayan Pendant (value of 50 USD, one per family).',
            'Gift certificate for $50 USD in the Jewelry department (not applicable in other promotions).',
            '20 USD gift certificate in the Tequila department.',
            '200 MXN gift voucher for food consumption at México Mágico.',
            'Entrance to the Mayan Museum.',

            'Loose Black Diamond 1K.',
            'Gift certificate of $250 USD in gold.',

            'Entrance fee to the park and cenote.',
            'Restrooms, dressing rooms, lockers, life jackets, showers.',
            'One bottle of water per person.',
            'Three stew tacos, with handmade tortillas.'
        ];
        foreach ($adicionales as $adicional) {
            additional::create([
                'name' => $adicional,
            ]);
        }
    }
}
