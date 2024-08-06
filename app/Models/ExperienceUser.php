<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceUser extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public $table = 'experience_user';

    public function detailUser()
    {
        return $this->belongsTo(DetailUser::class);
    }


}
