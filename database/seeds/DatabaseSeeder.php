<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        
        $this->call(TipohabitacionTableSeeder::class);
        $this->call(TipotrabajadorTableSeeder::class);
        $this->call(LocalTableSeeder::class);
        $this->call(HabitacionTableSeeder::class);   
        $this->call(TrabajadorTableSeeder::class);
        $this->call(AccesoTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // $this->call(AccesoUserTableSeeder::class);

        Model::reguard();

    }
}
