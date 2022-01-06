<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorSubmissions extends Model
{
    use HasFactory;

    protected $table = 'donor_submissions';
    protected $primaryKey = 'id_donor_submissions';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_donor_submissions', 'id_donators', 'id_institutions', 'recipient_donor_submissions', 'applicant_donor_submissions', 'blood_type_donor_submissions', 'rhesus_type_donor_submissions', 'quantity_donor_submissions', 'time_used_donor_submissions', 'ktp_donor_submissions', 'letter_donor_submissions', 'status_donor_submissions'];

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
        return $this->belongsTo(StatusDonor::class, 'status_donor_submissions', 'id_status_donor');
    }
}
