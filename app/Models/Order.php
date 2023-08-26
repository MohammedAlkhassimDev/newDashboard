<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'user_id', 'sub_total', 'quantity', 'delivery_charge',
        'status', 'total_amoint', 'first_name', 'last_name', 'country',
        'post_code', 'address1', 'address2', 'phone', 'email', 'payment_method',
        'payment_status', 'shipping_id', 'coupon'
    ];

    public static function getAllOrder() {
        return Order::where (['status' => 'active']) -> orderBy('id', 'DESC') -> paginate(2);
    } // End of getAllOrder

} // End of order model
