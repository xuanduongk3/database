<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShippingAddress extends Model
{
    use HasFactory;
    protected $table = 'order_shipping_addresses';
    protected $primaryKey = 'order_shipping_address_id';
    
    protected $fillable = [
        'order_id', 
        'full_name', 
        'phone', 
        'address_line1', 
        'address_line2', 
        'province', 
        'district', 
        'ward',
    ];

    // Mối quan hệ với bảng orders
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
