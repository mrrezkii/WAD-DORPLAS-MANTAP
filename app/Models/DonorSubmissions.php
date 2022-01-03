<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorSubmissions extends Model
{
    use HasFactory;

    protected $table = 'donor_submissions';
    protected $guarded = 'id_donor_submissions';
    protected $with = ['institutions', 'donators', 'status_donor'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }

    public function donators()
    {
        return $this->belongsTo(Donators::class, 'id_donators');
    }

    public function status()
    {
        return $this->belongsTo(StatusDonor::class, 'id_status_donor');
    }
}