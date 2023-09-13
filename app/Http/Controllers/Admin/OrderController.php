<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index () {
        $orders = Order::get();
        return view ('admin.orders.index', compact('orders'));
    } // End of index

    public function create () {
        return view ('admin.orders.create');
    } // end of create

    public function store () {
        //
    } // End of store

    public function edit (Order $order) {

        return view ('admin.orders.edit', compact('order'));
    } // End of edit

    public function update (Request $request, Order $order) {
        $order -> update($request -> except(['_token']));

        return redirect() -> route ('dashboard.order.show' , $order->id);
    } // End of update

    public function show (Request $request,Order $order) {

        return view('admin.orders.show', compact('order'));
    } // End of show

    public function destroy (Order $order) {
        $order -> delete();

        return redirect() -> route('dashboard.order.index');

    } // End of destroy

} // End of controller
