<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class GameResult extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [ 'user_id', 'winner', 'result' ];

    /**
     * @return BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
