<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorNotes extends Model
{
    use HasFactory;

    protected $table = 'donor_notes';
    protected $guarded = 'id_donor_notes';
    
}