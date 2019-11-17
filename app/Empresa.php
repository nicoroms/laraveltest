<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // agregamos los campos que tendrán permiso para ser modificados en la base de datos.
	public $table = "empresa";
	protected $fillable = ['nombre','numero_trabajadores','created_at'];
}
