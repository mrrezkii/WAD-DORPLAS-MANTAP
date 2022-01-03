<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusDonor extends Model
{
    use HasFactory;

    protected $table = 'status_donor';
    protected $guarded = 'id_status_donor';
    public $timestamps = false;
}
