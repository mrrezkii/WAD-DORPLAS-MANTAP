<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donators extends Model
{
    use HasFactory;

    protected $table = 'donators';
    protected $primaryKey = 'id_donators';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_donators', 'name_donators', 'email_donators', 'password_donators', 'blood_type_donators', 'rhesus_type_donators', 'contact_donators', 'address_donators', 'point_donators'];

}
