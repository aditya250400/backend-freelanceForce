<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvantageUser extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public $table = 'advantage_user';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
