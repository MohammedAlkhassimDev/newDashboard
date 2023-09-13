<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'coupon', 'quantity',
        'status', 'total_amount', 'first_name', 'last_name', 'country',
        'post_code', 'address', 'note', 'phone', 'email', 'payment_method',
        'payment_status'
    ];


    public function orderLists(){
        return $this->hasMany(OrderList::class);
    }



     // End of getAllOrder

} // End of order model