<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'price', 'vendorId', 'statusId', 'buyable', 'sellable', 'description',
    ];

    // products belongTo a sale order
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'products');
    }
}
