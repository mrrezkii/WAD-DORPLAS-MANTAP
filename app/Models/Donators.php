<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Donators extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'donators';
    protected $primaryKey = 'id_donators';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_donators', 'name_donators', 'email_donators', 'password_donators', 'blood_type_donators', 'rhesus_type_donators', 'contact_donators', 'address_donators', 'point_donators'];

    public function getAuthPassword()
    {
        return $this->password_donators;
    }
}
