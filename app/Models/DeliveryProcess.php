<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_status',
    ];

}
