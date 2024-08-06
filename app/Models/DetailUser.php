<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function experienceUsers() {
        return $this->hasMany(ExperienceUser::class);
    }

}
