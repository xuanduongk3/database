<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialEvent extends Model
{
    use HasFactory;
    protected $table = 'special_events';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'description',
        'img_event',
        'is_active',
        'start_date',
        'end_date',
        'status',
        'slug'
    ];
}
