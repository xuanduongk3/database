<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = 'catalogs';
    protected $primaryKey = 'catalog_id';
    protected $fillable = ['name', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'catalog_id');
    }
}
