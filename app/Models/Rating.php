<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey = 'rating_id';
    protected $fillable = [
        'score',
        'label',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class, 'rating_id', 'rating_id');
    }
}
