<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    public $timestamps = false;

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_tag');
    }
}
