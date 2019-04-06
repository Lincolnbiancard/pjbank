<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; 

    protected $primaryKey = 'codigoProduto';

    protected $fillable = ['codigoProduto', 'descricaoProduto', 'qtdeProduto', 'precoProduto'];

    public static function indexLetra($letra) {
        return static::where('descricaoProduto', 'LIKE',  $letra . '%')->get();
    }


}
