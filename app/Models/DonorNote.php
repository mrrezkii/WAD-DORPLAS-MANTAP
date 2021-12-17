<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorNote extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function donators(){
        return $this->belongsTo(Donator::class, 'id_donators');
    }

    public function institutions(){
        return $this->belongsTo(Institution::class, 'id_institutions');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'id_status');
    }
}
