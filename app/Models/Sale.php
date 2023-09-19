<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'customerId', 'products', 'salespersonId', 'statusId', 'orderTotal',
    ];

    // a sale order belongsTo a status
    public function status()
    {
        return $this->belongsTo(Status::class, 'id');
    }

    // a sale order belongsTo user (of type customer)
    public function customer()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // a sale order belongsTo salesperson
    public function salesperson()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // a sale order hasMany products
    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }
}
