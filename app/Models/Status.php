<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // a status hasMany users
    public function users()
    {
        return $this->hasMany(User::class, 'status');
    }

    // a status hasMany sales
    public function sales()
    {
        return $this->hasMany(Sale::class, 'statusId');
    }
}
