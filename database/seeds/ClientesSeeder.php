<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome'=>'Gabriel',
            'sobrenome'=>'Roque',
            'produto_id'=> '1'
        ]);
    }
}
