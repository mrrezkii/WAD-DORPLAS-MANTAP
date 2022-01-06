<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id_employees';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_employees', 'id_institutions', 'name_employees', 'email_employees', 'password_employees', 'contact_employees', 'address_employees'];


    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }

}
