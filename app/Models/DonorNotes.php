<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorNotes extends Model
{
    use HasFactory;

    protected $table = 'donor_notes';
    protected $fillable = ['id_donators', 'id_institutions', 'id_donor_events', 'status_donor_notes', 'schedule_donor_notes'];

//    protected $with = status_donor_notes

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }

    public function donators()
    {
        return $this->belongsTo(Donators::class, 'id_donators');
    }

    public function donorEvents()
    {
        return $this->belongsTo(DonorEvents::class, 'id_donor_events');
    }

    public function status()
    {
        return $this->belongsTo(StatusDonor::class, 'id_status_donor');
    }
}
