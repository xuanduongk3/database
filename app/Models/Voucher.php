<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'type',
        'name',
        'description',
        'discount_value',
        'min_order_value',
        'max_discount_amount',
        'start_date',
        'end_date',
        'quantity',
        'status'
    ];
}
