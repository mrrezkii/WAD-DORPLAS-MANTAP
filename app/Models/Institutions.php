<?php

namespace App\Models;

use Faker\Core\Blood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    use HasFactory;

    protected $table = 'institutions';
    protected $guarded = 'id_institutions';
    protected $with = ['blood_bank', 'employees', 'donor_events', 'donor_notes', 'donor_submissions'];

    public function bloodBank(){
        $this->hasMany(BloodBank::class, 'id_blood_bank');
    }

    public function employees(){
        $this->hasMany(Employees::class, 'id_employees');
    }

    public function donorEvents(){
        $this->hasMany(DonorEvents::class, 'id_donor_events');
    }

    public function donorNotes(){
        $this->hasMany(DonorNotes::class, 'id_donor_notes');
    }

    public function donorSubmissions(){
        $this->hasMany(DonorSubmissions::class, 'id_donor_submissions');
    }
}