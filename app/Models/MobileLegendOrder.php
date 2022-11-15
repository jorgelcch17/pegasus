<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLegendOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_user_id',
        'zone_id',
        'price',
        'payment_status',
        'mobile_legend_item_id',
        'user_id',
    ];

    public function mobile_legend_item(){
        return $this->belongsTo(MobileLegendItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
