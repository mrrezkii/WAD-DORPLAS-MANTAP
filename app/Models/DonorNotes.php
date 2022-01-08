<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorNotes extends Model
{
    use HasFactory;

    protected $table = 'donor_notes';
    protected $primaryKey = 'id_donor_notes';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_donor_notes', 'id_donators', 'id_institutions', 'id_donor_events', 'status_donor_notes', 'schedule_donor_notes'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }

    public function donators()
    {
        return $this->belongsTo(Donators::class, 'id_donators');
    }

    public function donor_events()
    {
        return $this->belongsTo(DonorEvents::class, 'id_donor_events');
    }

    public function status()
    {
        return $this->belongsTo(StatusDonor::class, 'status_donor_notes', 'id_status_donor');
    }
}
