<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

    protected $table = 'blood_bank';
    protected $primaryKey = 'id_blood_bank';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_blood_bank', 'id_institutions', 'a_positive_blood_bank', 'a_negative_blood_bank', 'b_positive_blood_bank', 'b_negative_blood_bank', 'ab_positive_blood_bank', 'ab_negative_blood_bank', 'o_positive_blood_bank', 'o_negative_blood_bank'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }

}
