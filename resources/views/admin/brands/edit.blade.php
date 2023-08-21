@extends ('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                </div>
                <h2><strong>Edit brand</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            <!-- validation -->
            @include('partials._error_val')



            <form action="{{route ('dashboard.brands.update', $brand -> id)}}" id="reg" onsubmit="process(event)" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

                @csrf
                @Method('put')

                @foreach (config('app.languages') as $key => $lang)
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Title</label>
                    <div class="col-md-9">
                        <input type="text" id="{{$key}}[title]" name="{{$key}}[title]" value="{{ $brand -> translate ($key) -> title }}" class="form-control">
                        <!-- <span class="help-block">This is a help text</span> -->
                    </div>
                </div>

               
                @endforeach

                

                <div class="form-group">
                    <label for="status" class="col-md-3 control-label">Status <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select name="status" class="form-control" size="1">
                            <option value="active" {{ ($brand ->status == "active") ? 'selected' : ' '  }}>Active</option>
                            <option value="inactive" {{ ($brand ->status == "inactive") ? 'selected' : ' '  }}>Inactive</option>
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