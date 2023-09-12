<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'currencyId', 'phone', 'email', 'website', 'taxid', 'logo', 'street', 'cityId', 'countryId'];
}
