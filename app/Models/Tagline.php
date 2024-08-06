<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagline extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public $table = 'tagline';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
