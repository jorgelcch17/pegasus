<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FfOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_account',
        'nickname_account',
        'price',
        'payment_status',
        'freefire_item_id',
        'user_id',
    ];

    // relacion de uno a uno con FreefireItem
    public function freefire_item(){
        return $this->belongsTo(FreefireItem::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
