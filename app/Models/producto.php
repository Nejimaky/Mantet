<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'ID_Producto';

    protected $fillable = ['Nombre','equipomant','marca','modelo', 'Cantidad'];

    /* por defecto se envian los siguientes campos en eloquoent  updated_at  y created_at*/
    /* esto evita que se envien esos campos */
    public $timestamps = false;
}
