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
                <h2><strong>Edit Category</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            <!-- validation -->
            @include('partials._error_val')



            <form action="{{route ('dashboard.categories.update', $category -> id)}}" id="reg" onsubmit="process(event)" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

                @csrf
                @Method('put')

                @foreach (config('app.languages') as $key => $lang)
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Title</label>
                    <div class="col-md-9">
                        <input type="text" id="{{$key}}[title]" name="{{$key}}[title]" value="{{ $category -> translate ($key) -> title }}" class="form-control">
                        <!-- <span class="help-block">This is a help text</span> -->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="summary">Summary</label>
                    <div class="col-md-9">
                        <textarea id="{{ $key }}[summary]" name="{{ $key }}[summary]" rows="9" class="form-control" placeholder="Content.."> {{ $category -> translate ($key) -> summary }} </textarea>
                    </div>
                </div>
                @endforeach


                <div class="form-group">
                    <label class="col-md-3 control-label" for="photo">Image</label>
                    <div class="col-md-9">
                        <input type="file" id="image" name="image">
                    </div>
                    <br>
                    <img src="" style="height : 50px; margin-top: 10px;" alt="">
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Is Parent</label>
                    <div class="col-md-9">

                        <label class="checkbox-inline" for="is_parent">
                            <input type="checkbox" id="is_parent" name="is_parent" value="{{ $category -> is_parent }}"  {{ ($category -> is_parent == 1) ? 'checked' : '' }}>
                        </label>

                    </div>
                </div>

                <div  class="form-group {{ ($category -> is_parent == 1 ) ? 'd-none' : ' ' }}" id="parent_cat_div">
                    <label class="col-md-3 control-label" for="parent_id">Parent Category</label>
                    <div class="col-md-6">
                        <select id="parent_id" name="parent_id" class="form-control" size="1">
                            
                            <option value="">--Select any category--</option>
                            @foreach ($parent_cats as $parent_cat)
                            <option value="{{ $parent_cat -> id }}" {{ ($parent_cat -> id == $category -> parent_id ) ? 'selected' : '' }}>{{ ($parent_cat -> title) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-md-3 control-label">Status <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select name="status" class="form-control" size="1">
                            <option value="active" {{ ($category ->status == "active") ? 'selected' : ' '  }}>Active</option>
                            <option value="inactive" {{ ($category ->status == "inactive") ? 'selected' : ' '  }}>Inactive</option>
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