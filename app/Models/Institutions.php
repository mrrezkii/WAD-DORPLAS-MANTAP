<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    use HasFactory;

    protected $table = 'institutions';
    protected $primaryKey = 'id_institutions';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_institutions', 'name_institutions', 'contact_institutions', 'email_institutions', 'address_institutions', 'longitude_institutions', 'latitude_institutions'];

    public function bloodBank()
    {
        $this->hasMany(BloodBank::class, 'id_blood_bank');
    }

    public function employees()
    {
        $this->hasMany(Employees::class, 'id_employees');
    }

    public function donorEvents()
    {
        $this->hasMany(DonorEvents::class, 'id_donor_events');
    }

    public function donorNotes(){
        $this->hasMany(DonorNotes::class, 'id_donor_notes');
    }

    public function donorSubmissions(){
        $this->hasMany(DonorSubmissions::class, 'id_donor_submissions');
    }
}
