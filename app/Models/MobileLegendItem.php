<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLegendItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'is_active',
        'bonus',
    ];

    public function ml_order(){
        return $this->hasOne(MobileLegendOrder::class);
    }
}
