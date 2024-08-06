<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'service';
    protected $guarded = [];
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function advantageUsers() {
        return $this->hasMany(AdvantageUser::class);
    }

    public function advantageServices() {
        return $this->hasMany(AdvantageService::class);
    }

    public function taglines()
    {
        return $this->hasMany(Tagline::class);
    }

    public function thumbnailServices()
    {
        return $this->hasMany(ThumbnailService::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }



}
