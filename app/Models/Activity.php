<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity',
        'description',
        'start_time',
        'end_time',
        'status',
        'notes',
        'images',
        'division',
        'is_review',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
