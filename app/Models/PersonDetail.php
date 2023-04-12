<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonDetail extends Model
{
    use HasFactory;
    protected $table='persondetail';
    protected $fillable=[
    'first_name',
    'last_name',
    'location',
    'photo',
    'user_id',
    ];
}
