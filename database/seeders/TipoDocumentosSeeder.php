<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '30',
            'Descripcion' => 'Factura',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '32',
            'Descripcion' => 'Factura de ventas y servicios no afectos o exentos de IVA',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '33',
            'Descripcion' => 'Factura electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '34',
            'Descripcion' => 'Factura no afecta o exenta electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '35',
            'Descripcion' => 'Boleta',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '38',
            'Descripcion' => 'Boleta exenta',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '39',
            'Descripcion' => 'Boleta electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '40',
            'Descripcion' => 'Liquidación factura',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '41',
            'Descripcion' => 'Boleta exenta electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '43',
            'Descripcion' => 'Liquidación factura electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '45',
            'Descripcion' => 'Factura de compra',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '46',
            'Descripcion' => 'Factura de compra electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '48',
            'Descripcion' => 'Pago electrónico',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '50',
            'Descripcion' => 'Guía de despacho',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '52',
            'Descripcion' => 'Guía de despacho electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '55',
            'Descripcion' => 'Nota de débito',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '56',
            'Descripcion' => 'Nota de débito electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '60',
            'Descripcion' => 'Nota de crédito',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '61',
            'Descripcion' => 'Nota de crédito electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '103',
            'Descripcion' => 'Liquidación',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '0',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '110',
            'Descripcion' => 'Factura de exportación electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '111',
            'Descripcion' => 'Nota de débito de exportación electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('TipoDocumentos')->insert([
            'codDocumento' => '112',
            'Descripcion' => 'Nota de crédito de exportación electrónica',
            'idEstado' => '1',
            'Modulo' => 'Sales',
            'EsDTE' => '1',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
    }
}
