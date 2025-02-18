<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $primaryKey = 'voucher_id';

    protected $fillable = [
        'code',
        'name',
        'description',
        'discount',
        'start_date',
        'end_date',
        'usage_limit',
    ];
}
