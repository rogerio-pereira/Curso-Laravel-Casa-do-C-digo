<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Linha opcional
    protected $table = 'produtos';
    public $timestamp = false;

    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade');

    protected $guarded = array('id');
}
