<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreefireItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'is_active',
    ];

    // relacion de uno a uno con FfOrder
    public function ff_order(){
        return $this->hasOne(FfOrder::class);
    }
}
