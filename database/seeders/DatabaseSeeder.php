<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //NO JALA XDD
        //User::factory(10)->has(Norma::factory()->count(3))->create();
        //Con la linea de codigo anteriro se facilita que por cada uno de los elementos que se
        //creen, se agreguen relaciones dentro de esta, ya no se llmaria al seeder individual del que se estan creando las relaciones (por ejemplo si
        //se estan creando pedidos con un cliente realcionado, los seeders de clientes ya no son necesarios)
        
        $this->call([
            ClienteTableSeeder::class,
            ProductoTableSeeder::class,
            PedidoTableSeeder::class,
            TagTableSeeder::class,
        ]);
    }
}
