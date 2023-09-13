<table class="table border-0 table-bordered table-hover">
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
                                <td class="text-center pro-img"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="{{ asset('media/products/'. $item -> model ->photo)}}" data-src="{{ asset('media/products/'. $item -> model ->photo)}}" alt="image" title="image" width="100" /></a></td>
                                <td class="text-center pro-del text-sm-left">
                                    <p class="mb-1 pro-name"><a href="{{ route('product.detail', $item -> model -> slug) }}">{{ $item -> name }}</a></p>
                                    <p class="mb-1">Size: Small</p>
                                    <p class="mb-1">Color: Black</p>
                                </td>
                                <td class="text-center pro-price">$ {{ number_format($item -> price, 2) }}</td>
                                <td class="text-center pro-qty">
                                    <div class="qty-box">
                                        <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                        <input type="text" name="quantity"  class="qty-input"  value="{{ $item -> qty }}"/>
                                        <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                                    </div>


                                <a href="{{ route('cart.delete')}}"  lass="ml-3 qty-remove remove-pro" data-toggle="tooltip"    onclick="event.preventDefault(); document.getElementById('delete-form-cart').submit();">
                                    <i class="ti-close"></i>
                                </a>

                                                   <form id="delete-form-cart"
                                                       action="{{ route('cart.delete') }}" method="POST"
                                                       style="display: none;">
                                                       @csrf
                                                       <input type="hidden" name="rowId" value="{{ $item->rowId }}" />

                                                   </form>
                                </td>
                                <td class="text-center pro-total"> $ {{ number_format($item -> price , 2) }}</td>
                            </tr>
                            @empty
                            <tr>
                               <td colspan="5" class="text-center"> <h2> cart is empty </h2> </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
