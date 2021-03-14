<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($query) {
            $query->uuid = Str::orderedUuid();
        });
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function highlights(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Highlight::class);
    }

    public function getVideoIdAttribute()
    {
        return explode('v=', $this->url)[1];
    }


    public function getEmbedAttribute(): string
    {
        return '<iframe id="youtube-player" class="mx-auto" width="560" height="315" src="https://www.youtube-nocookie.com/embed/'
        . $this->youtube_id
        . '?enablejsapi=1" frameborder="0" allowfullscreen></iframe>';
    }
}
