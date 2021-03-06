<?php

/* php artisan make:model nomeDaModel
 * php artisan make:model nomeDaModel -m (ja cria a migration)
 */


namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//  Colunas que PODEM ser preenchidas
    protected $fillable = ['name', 'number', 'active', 'category', 'description'];

//  Colunas que PODEM NAO ser preenchidas
//    protected $guarded = [];


    // VALIDACAO

//    public $rules = [
//        'name' => 'required|min:3|max:100',
//        'number' => 'required|numeric',
//        'category' => 'required',
//        'description' => 'min:3|max:1000',
//    ];

}
