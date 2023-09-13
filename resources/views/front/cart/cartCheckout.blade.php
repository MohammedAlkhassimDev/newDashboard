<div class="table-content table-responsive mb-4">
    <table class="table">
        <thead>
            <tr>
                <th class="text-center"><b>Product</b></th>
                <th class="text-left"></th>
                <th class="text-center"><b>Price</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping') -> content () as $item)

            <tr>
                <td class="pro-img text-center"><a href="#"><img class="img-fluid blur-up lazyload" src="{{ asset('media/products/'. $item -> model ->photo)}}" data-src="{{ asset('media/products/'. $item -> model ->photo)}}" alt="image" title="image" width="60" /></a></td>
                <td class="pro-del text-left">
                    <p class="mb-1 pro-name">{{ $item -> name }}</p>
                    <p class="mb-1">Quantity: {{ $item -> qty }} </p>
                </td>
                <td class="pro-price text-center">${{ number_format($item -> price , 2) }}</td>
            </tr>
         
        </tbody>

        @endforeach
    </table>
</div>