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
        $adicionales = ['Transportación de ida y vuelta en camionetas con placas federales que cuentan con todos los permisos y seguros requerido por la ley',
        'Seguro de viajero',
        'Degustación y Mixologia de tequilas y cremas artesanales con tequilero',
        'Dije Maya (con valor de 35 USD), uno por familia',
        'Certificado de regalo de $50 USD en el departamento de Joyería (no aplica en otras promociones) y de $20 USD en el departamento de Tequila',
        'Entrada al parque y cenote',
        'Baños, vestidores, lockers, chalecos salvavidas, regaderas',
        'Una botella de agua por persona',
        'Dos quesadillas y un taco de huevos con chaya cocinado a la leña, con tortillitas hechas a mano.',
        'Toallas de baño',
        'Tirolesas (tiene costo de 20 usd)',
        'Motos todo terreno (costo apartir de 30 usd)',
        'Caballos  (costo de 40 usd)'];
        foreach($adicionales as $adicional){
            additional::create([
                'name' => $adicional,
            ]);  
        }
    }
}
