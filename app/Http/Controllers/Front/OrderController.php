<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderList;
use Gloudemans\Shoppingcart\Facades\Cart as CartShopping;
use Mail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $request){
      //  Mail::to('obeysaad117@gmail.com')->send(new OrderMail());

       $request->request->add(['user_id' => Auth::id()]); //add request


        $request_data = $request -> except(['_token' , 'coupon']);


        $request_data['total_amount'] = CartShopping::instance('shopping')->total();

        $request_data['quantity'] = CartShopping::instance('shopping')->count();




        if($request->coupon){


            $coupon = Coupon::where('code' , $request->coupon)->first();

            if($coupon){

                if($coupon->type == 'fixed'){
                  $request_data['coupon'] = $coupon->value ;
                  $request_data['total_amount'] =   $request_data['total_amount'] - $coupon->value ;
                }else{
                    $new_total = $request_data['total_amount'] * ( $coupon->value / 100) ;
                    $request_data['coupon'] = $new_total;
                    $request_data['total_amount'] = $request_data['total_amount'] - $new_total;
                }
            }
        }


        $order = Order::create($request_data);


        foreach (CartShopping::instance('shopping')->content() as $item) {
            $orderlist = new OrderList;
            $orderlist->order_id = $order->id;
            $orderlist->product_id = $item->id;
            $orderlist->quantity = $item->qty;
            $orderlist->save();
         }

         CartShopping::instance('shopping')->destroy();

        return redirect()->route('thank');
    }
}
