@extends ('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class"></a>
                </div>
                <h2><strong>Edit order</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            <!-- validation -->
            @include('partials._error_val')

            <form action=" {{ route ('dashboard.order.update', $order -> id) }} " id="reg" onsubmit="process(event)" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

                @csrf

                @method('PATCH')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="status">Status :</label>
                    <div class="col-md-6">
                        <select name="status" id="" class="form-control">
                            <option value="">--Select Status--</option>
                            <option value="new" {{(($order->status=='new')? 'selected' : '')}}>New</option>
                            <option value="process" {{(($order->status=='process')? 'selected' : '')}}>process</option>
                            <option value="delivered" {{(($order->status=='delivered')? 'selected' : '')}}>Delivered</option>
                            <option value="cancel" {{(($order->status=='cancel')? 'selected' : '')}}>Cancel</option>
                        </select>
                    </div>
                </div>



                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Update</button>
                        <!-- <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button> -->
                    </div>
                </div>

            </form>

            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
    </div>

</div>


@endsection