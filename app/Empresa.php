<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // agregamos los campos modificables
	public $table = "empresa";
	protected $fillable = ['nombre','numero_trabajadores','created_at'];
}
