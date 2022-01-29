<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Departamento::create([
                "name" => 'Vía Gubernativa',
                "regional_id" =>1
            ]);
      
            Departamento::create([
              "name" => 'Defensa Judicia',
              "regional_id" =>1
          ]);
      
            Departamento::create([
              "name" => 'Cobro Coactivo',
              "regional_id" =>1
          ]);
      
          }
    }
}
