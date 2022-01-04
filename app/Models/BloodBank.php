<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

    protected $table = 'blood_bank';
    protected $guarded = 'id_blood_bank';
//    protected $with = ['institutions'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }
}
