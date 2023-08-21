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
                <h2><strong>New Category</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            <!-- validation -->
            @include('partials._error_val')



            <form action=" {{ route ('dashboard.categories.store') }} " id="reg" onsubmit="process(event)" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

                @csrf

                @foreach (config('app.languages') as $key => $lang)

                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Title {{$key}} <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" id="{{$key}}[title]" name="{{$key}}[title]" value="{{ old( $lang.'.title') }}" class="form-control">
                        <!-- <span class="help-block">This is a help text</span> -->

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="summary">Summary {{ $key }}</label>
                    <div class="col-md-9">
                        <textarea id="{{$key}}[summary]" name="{{$key}}[summary]" rows="3" class="form-control" placeholder="Content.."> {{ old($lang.'.summary') }} </textarea>


                    </div>
                </div>

                @endforeach

                <div class="form-group">
                    <label class="col-md-3 control-label" for="image">Image</label>
                    <div class="col-md-9">
                        <input type="file" id="image" name="image">
                    </div>
                    <br>
                    <img src="" style="height : 50px; margin-top: 10px;" alt="">
                </div>

                

                <div class="form-group">
                    <label class="col-md-3 control-label">Is Parent</label>
                    <div class="col-md-6">
                        <label class="checkbox-inline" for="is_parent">
                            <input type="checkbox" id="is_parent" name="is_parent" value='1'  checked> Yes
                        </label>

                    </div>
                </div>

               

                <div id="parent_cat_div" class="form-group d-none">
                    <label class="col-md-3 control-label" for="parent_id">Parent Category</label>
                    <div class="col-md-6">
                        <select id="parent_id" name="parent_id" class="form-control" size="1">
                            <option value="">Please select</option>
                            @foreach ($parent_cats as $parent_cat)
                            <option value='{{ $parent_cat -> id }}'>{{ $parent_cat -> title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-md-3 control-label">Status <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select name="status" class="form-control" size="1">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Create</button>
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

@push('scripts')


@endpush 