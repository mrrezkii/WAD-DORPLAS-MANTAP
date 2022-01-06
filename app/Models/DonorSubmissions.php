<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorSubmissions extends Model
{
    use HasFactory;

    protected $table = 'donor_submissions';
    protected $fillable = ['id_donators', 'id_institutions', 'recipient_donor_submissions', 'applicant_donor_submissions', 'blood_type_donor_submissions', 'rhesus_type_donor_submissions', 'quantity_donor_submissions', 'time_used_donor_submissions', 'ktp_donor_submissions', 'letter_donor_submissions', 'status_donor_submissions'];
//    protected $with = ['institutions', 'donators', 'status_donor'];

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
