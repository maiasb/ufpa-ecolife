<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property int id
 * @property string nome
 * @property string created_at
 * @property string updated_at
 */
class ProductCategory extends Model
{
    protected $table = 'produtos_categorias';
    protected $fillable = [
        'id',
        'nome',
        'created_at',
        'updated_at',
    ];
}