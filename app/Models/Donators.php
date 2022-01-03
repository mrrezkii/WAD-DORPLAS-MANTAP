<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donators extends Model
{
    use HasFactory;

    protected $table = 'donators';
    protected $guarded = 'id_donators';
}
