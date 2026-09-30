<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $guarded = ['id'];

    // Relasi balik ke food
    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }

    // Relasi balik ke order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}