<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{

    use HasFactory;
    protected $table = 'customer_addresses'; // tên bảng chính xác trong database
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'username',
        'phone',
        'province',
        'district',
        'ward',
        'address',
        'default_address'
    ];
}
