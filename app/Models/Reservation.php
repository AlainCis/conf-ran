<?php

namespace App\Models;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "datereservation",
        "attente",
        "status",
        "user_id",
        "conference_id"
    ];

    public function conference(){
        return $this->belongsTo(Conference::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
