<?php

namespace Database\Seeders;

use App\Models\Subasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubastasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    $articulos = [
        ['Computador', 'Daño, con daño en la pantalla', 100],
        ['Guitarra', 'No tiene estuche', 300],
        ['Teclado', 'Gamer',50],

    ];
    foreach($articulos as [$titulo, $descripcion, $precio]){

        Subasta::create([
            'titulo'=> $titulo,
            'descripcion'=> $descripcion,
            'precio_inicial'=> $precio,
            'precio_actual'=> $precio,
            'termina_en'=> now()->addDays(2),

        ]);
    }
    }
}
