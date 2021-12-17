<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function donorNote(){
        return $this->hasMany(DonorNote::class);
    }
}
