<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(App\Articulo::class,10)->create();
        // factory(App\Periodista::class,10)->create();
        // factory(App\Sucursal::class,10)->create();
        // factory(App\Tipo::class,10)->create();
        // factory(App\Empleado::class,10)->create();
        // factory(App\Revista::class,10)->create();
        // factory(App\Periodista_Articulo::class,10)->create();
        // factory(App\Revista_Articulo::class,10)->create();
        factory(App\Sucursal_Revista::class,10)->create();        
    }
}
