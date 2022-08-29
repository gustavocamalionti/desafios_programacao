<?php

use Illuminate\Database\Seeder;
use App\SorteMilhaoNumero;

class SorteMilhaoNumeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '20000M');
        $quantidade_registro_banco = SorteMilhaoNumero::all()->count();
        while ($quantidade_registro_banco != 1000000) {
            //$quantidade_registro_banco = SorteMilhaoNumero::all()->count();
            try {
                factory(SorteMilhaoNumero::class, 10000)->create();
            } catch (Exception $e){ 
            }
        }
    }
}
