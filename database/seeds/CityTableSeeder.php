<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estates')->insert([
            ['name'=>'Nova Lima', 'estate_id'=>'13'],
            ['name'=>'Belo Horizonte', 'estate_id'=>'13'],
            ['name'=>'Juiz de Fora', 'estate_id'=>'13'],
          ]);
    }
}
