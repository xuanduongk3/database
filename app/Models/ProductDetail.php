<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $primaryKey = 'product_detail_id';
    
    protected $fillable = [
        'product_id',
        'supplier_id',
        'brand_id',
        'color_id',
        'publisher_id',
        'publication_year',
        'author',
        'origin',
        'language',
    ];

    // Các mối quan hệ với các model khác
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
