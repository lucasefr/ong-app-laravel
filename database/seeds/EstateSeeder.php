<?php

use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder
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
            ['name'=>'Acre'],
            ['name'=>'Alagoas'],
            ['name'=>'Amapá'],
            ['name'=>'Amazonas'],
            ['name'=>'Bahia'],
            ['name'=>'Ceará'],
            ['name'=>'Distrito Federal'],
            ['name'=>'Espirito Santo'],
            ['name'=>'Goiás'],
            ['name'=>'Maranhão'],
            ['name'=>'Mato Grosso'],
            ['name'=>'Mato Grosso do Sul'],
            ['name'=>'Minas Gerais'],
            ['name'=>'Pará'],
            ['name'=>'Paraíba'],
            ['name'=>'Paraná'],
            ['name'=>'Pernambuco'],
            ['name'=>'Piauí'],
            ['name'=>'Rio de Janeiro'],
            ['name'=>'Rio Grande do Norte'],
            ['name'=>'Rio Grande do Sul'],
            ['name'=>'Rondônia'],
            ['name'=>'Roraima'],
            ['name'=>'Santa Catarina'],
            ['name'=>'São Paulo'],
            ['name'=>'Sergipe'],
            ['name'=>'Tocantins'],
            
          ]);
    }
}
