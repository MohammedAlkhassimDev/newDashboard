<table class="table table-bordered border-0 table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center text-sm-left">Product Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping') -> content () as $item)
                            <tr>
                                <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="{{ asset('media/products/'. $item -> model ->photo)}}" data-src="{{ asset('media/products/'. $item -> model ->photo)}}" alt="image" title="image" width="100" /></a></td>
                                <td class="pro-del text-center text-sm-left">
                                    <p class="mb-1 pro-name"><a href="{{ route('product.detail', $item -> model -> slug) }}">{{ $item -> name }}</a></p>
                                    <p class="mb-1">Size: Small</p>
                                    <p class="mb-1">Color: Black</p>
                                </td>
                                <td class="pro-price text-center">$ {{ number_format($item -> price, 2) }}</td>
                                <td class="pro-qty text-center">
                                    <div class="qty-box">
                                        <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                        <input type="text" name="quantity"  class="qty-input"  value="{{ $item -> qty }}"/>
                                        <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                    </div>
                                    <a class="qty-remove ml-3 remove-pro" data-id="{{ $item -> rowId }}" href="#"><i class="ti-close"></i></a>
                                </td>
                                <td class="pro-total text-center"> $ {{ number_format($item -> price , 2) }}</td>
                            </tr>
                            @empty 
                            <tr>
                                <td class="pro-img text-center"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-100x100.jpg" data-src="assets/images/products/product-100x100.jpg" alt="image" title="image" width="100" /></a></td>
                                <td class="pro-del text-center text-sm-left">
                                    <p class="mb-1 pro-name"><a href="product-details.html">Donec pede justo fringilla</a></p>
                                    <p class="mb-1">Size: Small</p>
                                    <p class="mb-1">Color: Black</p>
                                </td>
                                <td class="pro-price text-center">$376.00</td>
                                <td class="pro-qty text-center">
                                    <div class="qty-box">
                                        <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                        <input type="text" name='quantity' value='1' class="qty-input" />
                                        <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                    </div>
                                    <a class="qty-remove ml-3" href="#"><i class="ti-close"></i></a>
                                </td>
                                <td class="pro-total text-center">$376.00</td>
                            </tr>
                            @endforelse
                           
                        </tbody>
                    </table>