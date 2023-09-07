@extends ('layouts.admin')

@section('content')

<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Coupons<br><small></small>
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="javascript:void(0)">Coupons</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">

    <div class=" f-right">
        <div class="text-right py-2" style="margin-bottom: 7px;">

            <a class="btn btn-primary " href=" {{ route ('dashboard.coupons.create') }}">Add New </a>

            <!-- <a class="btn btn-primary " disabled href="javascript:void(0)">Create New </a> -->

        </div>
    </div>



    <div class="table-responsive">

        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Code</th>
                    <th class="text-center">Value</th>
                    <th class="text-center">type</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @forelse ($coupons as $coupon)
                <tr>
                    <td class="text-center"><?= $i += 1 ?></td>
                    <td class="text-center">{{ $coupon -> code }}</td>
                    <td class="text-center">{{ $coupon -> value }}</td>
                   
                    <td class="text-center">
                        @if ($coupon -> type == 'fixed')
                            {{ $coupon -> type }}
                        @else
                            
                            {{ $coupon -> type }}
                        @endif
                    </td>

                    <td class="text-center"> <label class="switch switch-success"><input type="checkbox" data-toggle="toggle" data-id="{{ $coupon -> id }}" name="toggle" {{ $coupon -> status == 'active' ? 'checked' : '' }} ><span></span></label></td>
                    <td class="text-center">
                        <div class="btn-group">

                            <a href="{{ route('dashboard.coupons.edit', $coupon -> id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default "><i class="fa fa-pencil"></i></a>

                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default " disabled><i class="fa fa-pencil"></i></a> -->


                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger delete"></a> -->

                            <form action="{{ route('dashboard.coupons.destroy', $coupon -> id) }}" method="post">
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

    $('input[name=toggle]').change(function() {
        var mod = $(this).prop('checked');
        var id = $(this).data('id');
        // alert(mod);
        var path = "{{ route ('dashboard.coupon.status') }}";
        var token = "{{ csrf_token() }}";
        
        $.ajax ({
            url : path,
            type: 'POST',
            dataType: 'JSON',
            data : {
                _token : token,
                id : id,
                mod : mod
            }, success : function (res) {
                alert(data.msg);
            },  error : function(err) {
                alert.log(err);
            }

        })

        
    });
</script>

@endpush