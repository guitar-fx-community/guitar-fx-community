<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','username','avatar_path','display_name','bio','links'
    ];

    protected $casts = [
        'links' => 'array',
    ];

    public function user() { return $this->belongsTo(User::class); }

    public function getUrlAttribute(): string
    { return url('/u/'.$this->username); }

    protected static function booted(): void
    {
        static::saving(function($profile){
            $profile->username = Str::slug($profile->username);
        });
    }
}