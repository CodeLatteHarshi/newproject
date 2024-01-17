<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'cutomer_lastname',
        'phone_number',
        'email',
        'address',
        'city',
        'card-number',
      
    ];
}
