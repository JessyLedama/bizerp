<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // a userType hasMany users
    public function users()
    {
        return $this->hasMany(User::class, 'userTypeId');
    }
}
