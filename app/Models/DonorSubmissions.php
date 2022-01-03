<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorSubmissions extends Model
{
    use HasFactory;

    protected $table = 'donor_submissions';
    protected $guarded = 'id_donor_submissions';
}
