<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class);
    }
}
