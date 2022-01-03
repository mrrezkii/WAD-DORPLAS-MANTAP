<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $guarded = 'id_employees';

    protected $with = ['institutions'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }
}