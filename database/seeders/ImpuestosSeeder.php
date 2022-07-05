<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ImpuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('impuestos')->insert([
            'FactorImpuesto' => '19.0',
            'Descripcion' => 'Impuesto a las Ventas y Servicios (IVA)',
            'EsExento' => '0',
            'idEstado' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('impuestos')->insert([
            'FactorImpuesto' => '15.0',
            'Descripcion' => 'Impuesto a los Productos Suntuarios',
            'EsExento' => '0',
            'idEstado' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('impuestos')->insert([
            'FactorImpuesto' => '10',
            'Descripcion' => 'Impuesto a las Bebidas Alcohólicas, Analcohólicas y Productos Similares',
            'EsExento' => '0',
            'idEstado' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('impuestos')->insert([
            'FactorImpuesto' => '52.6',
            'Descripcion' => 'Impuesto a los Tabacos',
            'EsExento' => '0',
            'idEstado' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('impuestos')->insert([
            'FactorImpuesto' => '59.7',
            'Descripcion' => 'Impuesto a los Tabacos - Puros',
            'EsExento' => '0',
            'idEstado' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'), 
            'updated_at' => now()->format('Y-m-d H:i:s')
        ]);

    }
}
