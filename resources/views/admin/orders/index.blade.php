@extends ('layouts.admin')

@section('content')

<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Orders<br><small></small>
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="javascript:void(0)">Orders</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">

    <div class=" f-right">
        <div class="text-right py-2" style="margin-bottom: 7px;">

            <a class="btn btn-primary " href=" {{ route ('dashboard.order.create') }}">Add New </a>

            <!-- <a class="btn btn-primary " disabled href="javascript:void(0)">Create New </a> -->

        </div>
    </div>



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
                @forelse ($orders as $order)
                <tr>
                    <td class="text-center"><?= $i += 1 ?></td>
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

                            <a href="{{ route('dashboard.order.show', $order -> id) }}" data-toggle="tooltip" title="show" class="btn btn-xs btn-info mr-2"><i class="fa fa-eye"></i></a>
                          
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
                @empty

                <tr>
                    <td><h5>No records</h5> </td>
                </tr>
                

                @endforelse


            </tbody>
        </table>
    </div>
</div>
<!-- END Datatables Content -->

@endsection

@push('scripts')

<!-- Load and execute javascript code used only in this page -->
<script src="{{ asset ('assets_backend/js/pages/tablesDatatables.js') }}"></script>
<script>
    $(function() {
        TablesDatatables.init();
    });
</script>

@endpush