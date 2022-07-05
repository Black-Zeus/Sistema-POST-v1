<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'Descripcion' => 'Activo',
            'Modulo' => 'General',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('estados')->insert([
            'Descripcion' => 'Inactivo',
            'Modulo' => 'General',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('estados')->insert([
            'Descripcion' => 'Bloqueado',
            'Modulo' => 'General',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('estados')->insert([
            'Descripcion' => 'Eliminado',
            'Modulo' => 'General',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
    }
}
