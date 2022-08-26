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
        factory(SorteMilhaoNumero::class, 100)->create();
    }
}
