<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    public const APPROVED = 'approved';
    public const REJECTED = 'rejected';
    public const PENDING = 'pending';
    public const REVISION = 'revision';
    public const REVIEWING = true;
    public const NOT_REVIEWING = false;

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
        'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed  $value
     * @param  string|null  $field
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function resolveRouteBinding($encryptedId, $field = null)
    {
        preg_match('/(\d+)/', Crypt::decryptString($encryptedId), $output_array);
        return self::where('id', $output_array[0])->firstOrFail();
    }
}
