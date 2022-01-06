<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorEvents extends Model
{
    use HasFactory;

    protected $table = 'donor_events';
    protected $primaryKey = 'id_donor_events';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_donor_events', 'id_institutions', 'name_donor_events', 'start_date_donor_events', 'end_date_donor_events', 'start_time_donor_events', 'end_time_donor_events', 'desc_donor_events', 'thumbnail_donor_events', 'point_donor_events'];

    protected $with = ['institutions'];

    public function institutions()
    {
        return $this->belongsTo(Institutions::class, 'id_institutions');
    }
}
