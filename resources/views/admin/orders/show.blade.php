@extends ('layouts.admin')

@section('content')

<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Order Details<br><small></small>
        </h1>
    </div>
</div>

<ul class="breadcrumb breadcrumb-top">
    <li></li>
    <li><a class="btn btn-sm btn-primary shadow-sm float-right" href="javascript:void(0)">Genarate PDF</a></li>
</ul>

<!-- Datatables Content -->
<div class="block full">

    <!-- <div class=" f-right">
        <div class="text-right py-2" style="margin-bottom: 7px;">

            <a class="btn btn-primary " href=" {{ route ('dashboard.order.create') }}">Add New </a>

            <a class="btn btn-primary " disabled href="javascript:void(0)">Create New </a>

        </div>
    </div> -->



    <div class="table-responsive">

        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center"><i class="gi gi-orders">No.</i></th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total Amount</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>

                <tr>
                    <td class="text-center">#</td>
                    <td class="text-center">{{ $order -> order_number }}</td>
                    <td class="text-center">{{ $order -> firstname }} {{ $order -> lastname }}</td>
                    <td class="text-center">{{ $order -> email }}</td>
                    <td class="text-center">{{ $order -> quantity }}</td>
                    <td class="text-center">${{number_format($order->total_amount,2)}}</td>
                    <td class="text-center">

                        @if($order->status=='new')
                        <span class="badge badge-primary">{{$order->status}}</span>
                        @elseif($order->status=='process')
                        <span class="badge badge-warning">{{$order->status}}</span>
                        @elseif($order->status=='delivered')
                        <span class="badge badge-success">{{$order->status}}</span>
                        @else
                        <span class="badge badge-danger">{{$order->status}}</span>
                        @endif
                    </td>

                    <td class="text-center">
                        <div class="btn-group">

                            <!-- <a href="{{ route('dashboard.order.show', $order -> id) }}" data-toggle="tooltip" title="show" class="btn btn-xs btn-info mr-2"><i class="fa fa-eye"></i></a> -->

                            <a href="{{ route('dashboard.order.edit', $order -> id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default "><i class="fa fa-pencil"></i></a>

                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default " disabled><i class="fa fa-pencil"></i></a> -->


                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger delete"></a> -->

                            <form action="{{ route('dashboard.order.destroy', $order -> id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger delete"><i class="fa fa-times"></i></button>
                            </form>


                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger " disabled><i class="fa fa-times"></i></a> -->


                        </div>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
</div>
<!-- END Datatables Content -->

<!-- xxx -->
<div class="card">
   
    <div class="card-body table-responsive">
        @if($order)
        <section class="confirmation_part section_padding">
            <div class="order_boxes">
                <div class="row">
                    <div class="col-lg-6 col-lx-4">
                        <div class="order-info">
                            <h4 class="text-center pb-4">ORDER INFORMATION</h4>
                            <table class="table">
                                <tr class="">
                                    <td>Order Number</td>
                                    <td> : {{$order->order_number}}</td>
                                </tr>
                                <tr>
                                    <td>Order Date</td>
                                    {{-- <td> : {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}} --}}</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td> : {{$order->quantity}}</td>
                                </tr>
                                <tr>
                                    <td>Order Status</td>
                                    <td> : {{$order->status}}</td>
                                </tr>
                                <tr>
                                    {{-- @php
                          $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                      @endphp --}}
                                    <td>Shipping Charge</td>
                                    <td>{{-- : $ {{number_format($shipping_charge[0],2)}} --}}</td>
                                </tr>
                                <tr>
                                    <td>Coupon</td>
                                    <td> : $ {{number_format($order->coupon,2)}}</td>
                                </tr>
                                <tr>
                                    <td>Total Amount</td>
                                    <td> : $ {{number_format($order->total_amount,2)}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                                </tr>
                                <tr>
                                    <td>Payment Status</td>
                                    <td> : {{$order->payment_status}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lx-4">
                        <div class="shipping-info">
                            <h4 class="text-center pb-4">SHIPPING INFORMATION</h4>
                            <table class="table">
                                <tr class="">
                                    <td>Full Name</td>
                                    <td> : {{$order->first_name}} {{$order->last_name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : {{$order->email}}</td>
                                </tr>
                                <tr>
                                    <td>Phone No.</td>
                                    <td> : {{$order->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td> : {{$order->address1}}, {{$order->address2}}</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td> : {{$order->country}}</td>
                                </tr>
                                <tr>
                                    <td>Post Code</td>
                                    <td> : {{$order->post_code}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

    </div>
</div>

@endsection