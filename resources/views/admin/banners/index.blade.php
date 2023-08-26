@extends ('layouts.admin')

@section('content')

<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Banners<br><small></small>
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="javascript:void(0)">Banners</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">

    <div class=" f-right">
        <div class="py-2 text-right" style="margin-bottom: 7px;">

            <a class="btn btn-primary " href=" {{ route ('dashboard.banners.create') }}">Add New </a>

            <!-- <a class="btn btn-primary " disabled href="javascript:void(0)">Create New </a> -->

        </div>
    </div>



    <div class="table-responsive">

        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @forelse ($banners as $banner)
                <tr>
                    <td class="text-center"><?= $i += 1 ?></td>
                    <td class="text-center">{{ $banner -> title }}</td>
                    <td class="text-center">
                        <div class="btn-group">

                            <a href="{{ route('dashboard.banners.edit', $banner -> id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default "><i class="fa fa-pencil"></i></a>

                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default " disabled><i class="fa fa-pencil"></i></a> -->


                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger delete"></a> -->

                            <form action="{{ route('dashboard.banners.destroy', $banner -> id) }}" method="post">
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
