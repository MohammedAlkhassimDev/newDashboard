<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as CartShopping;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart () {
        return view ('front.pages.cart');
    } // End of cart 

    public function cartStore(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;

        $product = Product::getProductByCart($product_id);

        $price = $product[0]['price'];

        $cart_array = [];

        // return $price;

        foreach (CartShopping::instance('shopping')->content() as $item) {
            $cart_array[] = $item->id;
        }


        $result = CartShopping::instance('shopping')->add($product_id, $product[0]['title'], $product_qty, $price)->associate('App\Models\Product');

        if ($result) {

            $response['status'] = true;
            $response['product_id'] = $product_id;
            $response['total'] = CartShopping::subtotal();
            $response['cart_acount'] = CartShopping::instance('shopping')->count();
            $response['message'] = "Item is added succussfully";
        }

        if ($request->ajax()) {
            $header = view('front.layouts.header')->render();
            $response['header'] = $header;
        }

        // \notify()->success('Item is added succussfully');
        return json_encode($response);

        // $price = $product[];

    } // End of cart store


    public function cartDelete(Request $request)
    {
        $rowId = $request->input('rowId');

        CartShopping::instance('shopping')->remove($rowId);



        $response['status'] = true;
        // $response['product_id'] = $product_id;
        $response['total'] = CartShopping::subtotal();
        $response['cart_acount'] = CartShopping::instance('shopping')->count();
        $response['message'] = "Item is deleted succussfully";


        if ($request->ajax()) {
            $cart = view('front.layouts.cart')->render();
            $cartItem = view('front.layouts.cartItem')->render();
            $header = view('front.layouts.header')->render();
            $response['cart'] = $cart;
            $response['cartItem'] = $cartItem;
            $response['header'] = $header;
        }

        return json_encode($response);
    } // End of cart delete 


} // End of Cart Controller 
