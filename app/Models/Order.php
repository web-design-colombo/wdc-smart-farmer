<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_Items;


class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'email',
        'country',
        'address',
        'city',
        'province',
        'phone',
        'zip_code',
        'order_notes',
        'status',
        'tracking_no',
        'tot',
    ];

    public function items()
    {
        return $this->hasMany(Order_Items::class);
    }

}
