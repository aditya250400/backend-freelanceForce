<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public $table = 'orders';

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function buyer() {
        return $this->belongsTo('App\Models\User', 'buyer_id', 'id');
    }

    public function freelancer()
    {
        return $this->belongsTo('App\Models\User', 'freelancer_id', 'id');
    }
}
