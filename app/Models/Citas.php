<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Citas extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message',
        'realPublicacionYear',
        'autor',
        'expiration',
        'user_id', 
    ];

    protected $casts = [
        'expiration' => 'date',
        ];
    
    public function owner():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(): HasMany{
        return $this->hasMany(Comments::class);
    }
}
