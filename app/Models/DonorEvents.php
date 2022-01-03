<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorEvents extends Model
{
    use HasFactory;

    protected $table = 'donor_events';
    protected $guarded = 'id_donor_events';
}
