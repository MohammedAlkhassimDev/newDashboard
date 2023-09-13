<div class="cart-drawer model fade right show cart-drawer-right">
    <div class="minicart-head">
        <h3>Shopping Cart</h3>
        <a class="close-btn active">
            <i class="ti-close"></i>
        </a>
    </div>
    <div class="minicart-details">
        <div class="empty-cart">
            <p>You have no items in your shopping cart.</p>
        </div>
        <ul class="clearfix cart-lists">
            @forelse (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping') -> content () as $item)
            <li class="cart-item d-table">
                <div class="align-middle pro-img d-table-cell">
                    <a href="product-details.html">
                        <img class="img-fluid blur-up lazyload"
                            src="{{ asset('media/products/'. $item -> model ->photo)}}"
                            data-src="{{ asset('media/products/'. $item -> model ->photo)}}" alt="image"
                            title="Donec pede justo fringilla" />
                    </a>
                </div>
                <div class="pl-4 text-left align-top item-info d-table-cell">
                    <a href="{{ route ('product.detail', $item -> model -> slug ) }}">{{ $item -> name }}</a>
                    <!-- <p class="size-color">Sliver Black/XXL</p> -->
                    <p class="price">{{ $item -> qty }} x $ {{ number_format($item -> price , 2) }}</p>
                </div>
                <div class="align-middle item-right cart-remove d-table-cell">
                    <a class="mr-2 edit" href="#"><i class="ti-pencil-alt"></i></a>
                    <a class="remove remove-pro" data-id="{{$item -> rowId }}" href="#"><i class="ti-close"></i></a>
                </div>
            </li>
            @empty
            <li class="cart-item d-table">
                <div class="align-middle pro-img d-table-cell">
                    <a href="product-details.html">
                        <img class="img-fluid blur-up lazyload"
                            src="{{ asset('assets/front-assets/images/products/cart-pro-76x76.jpg')}}"
                            data-src="{{ asset('assets/front-assets/images/products/cart-pro-76x76.jpg')}}" alt="image"
                            title="Sociosqu facilisi senectus nisi etiam" />
                    </a>
                </div>
                <div class="float-left pl-4 text-left align-top item-info d-table-cell">
                    <a href="#">Sociosqu facilisi senectus nisi</a>
                    <p class="size-color">Red/XL</p>
                    <p class="price">1 x $299.00</p>
                </div>
                <div class="align-middle item-right cart-remove d-table-cell">
                    <a class="mr-2 edit" href="#"><i class="ti-pencil-alt"></i></a>
                    <a class="remove" href="#"><i class="ti-close"></i></a>
                </div>
            </li>
            @endforelse

        </ul>
    </div>

    <div class="minicart-bottom-actions">
        <div class="pro-totals d-inline-block w-100">
            <div class="clearfix mb-1 items">
                <span class="float-left item subtotal">Subtotal:</span>
                <span class="float-right price-total"><span
                        class="price">{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span></span>
            </div>
            <div class="clearfix mb-1 items">
                <span class="float-left item shipping">Shipping:</span>
                <span class="float-right price-total"><span class="price">$10.00</span></span>
            </div>
            <div class="clearfix mb-1 items">
                <span class="float-left item tax">Tax:</span>
                <span class="float-right price-total"><span class="price">$0.00</span></span>
            </div>
            <div class="clearfix items">
                <span class="float-left item total">Total:</span>
                <span class="float-right price-total"><span
                        class="price">${{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span></span>
            </div>
        </div>
        <div class="text-center actions d-inline-block w-100">
            <a class="mb-4 btn btn-primary d-block font-sm-14" href="{{ route ('cart') }}">View Cart</a>
            <a class="btn btn-secondary d-block font-sm-14" href="checkout.html">Proceed to checkout</a>
        </div>
    </div>
</div>