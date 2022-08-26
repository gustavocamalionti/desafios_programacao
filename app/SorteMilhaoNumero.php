<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SorteMilhaoNumero extends Model
{
    protected $table = 'sorte_milhao_numeros';
    protected $fillable = ['CodSeguranca'];
}
