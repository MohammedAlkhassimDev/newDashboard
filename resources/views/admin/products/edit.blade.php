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
                <h2><strong>New Product</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            <!-- validation -->
            @include('partials._error_val')

            <form action=" {{ route ('dashboard.products.update',  $product -> id) }} " id="reg" onsubmit="process(event)" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

                @csrf
                @Method('put')

                @foreach (config('app.languages') as $key => $lang)

                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Title {{$key}} <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" id="{{$key}}[title]" name="{{$key}}[title]" value="{{ $product -> translate ($key) -> title }}" class="form-control">
                        <!-- <span class="help-block">This is a help text</span> -->

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="summary">Summary {{ $key }}</label>
                    <div class="col-md-9">
                        <textarea id="{{$key}}[summary]" name="{{$key}}[summary]" rows="3" class="form-control" placeholder="Content.."> {{ $product -> translate ($key) -> summary }} </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="description">Description {{ $key }}</label>
                    <div class="col-md-9">
                        <textarea id="{{$key}}[description]" name="{{$key}}[description]" rows="3" class="form-control" placeholder="Content.."> {{ $product -> translate ($key) -> description }} </textarea>

                    </div>
                </div>

                @endforeach



                <div class="form-group">
                    <label for="inputPhoto" class="col-md-3 control-label">Main Photo </label>
                    <div class=" col-md-6">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i>
                                </a>
                            </span>

                            <input id="thumbnail" class="form-control" type="file" name="photo">
                        </div>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Is Featured</label>
                    <div class="col-md-6">
                        <label class="checkbox-inline" for="is_featured">
                            <input type="checkbox" id="is_featured" value="{{ $product-> is_featured }}" name="is_featured" {{ ($product -> is_featured == 1) ? 'checked' : '' }}> Yes
                        </label>

                    </div>
                </div>

                <div id="parent_cat_div" class="form-group">
                    <label class="col-md-3 control-label" for="cat_id">Categories <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select id="cat_id" name="cat_id" class="form-control" size="1">
                            <option value="0">-- Please select category --</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category -> id }}" {{ ($product->cat_id == $category -> id) ? 'selected' : '' }}>{{ $category -> title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group d-none" id="child_cat_div">
                    <label class="col-md-3 control-label" for="child_cat_id"> Sub Category</label>
                    <div class="col-md-6">
                        <select name="child_cat_id" id="child_cat_id" class="form-control">

                            <option value="">--Select any category--</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-md-3 control-label">Price(NRS) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input id="price" type="number" name="price" placeholder="Enter price" value="{{ $product -> price }}" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <label for="discount" class="col-md-3 control-label">Discount(%)</label>
                    <div class="col-md-6">
                        <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount" value="{{ $product -> discount }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="brand_id">Brand</label>
                    {{-- {{$brands}} --}}
                    <div class="col-md-6">
                        <select name="brand_id" class="form-control">
                            <option value="">--Select Brand--</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}" {{ ($product -> brand_id == $brand -> id) ? 'selected' : '' }}> {{$brand->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="condition">Condition</label>
                    <div class="col-md-6">
                        <select name="condition" class="form-control">
                            <option value="">--Select Condition--</option>
                            <option value="default" {{(($product->condition=='default')? 'selected':'')}}>Default</option>
                            <option value="new" {{(($product->condition=='new')? 'selected':'')}}>New</option>
                            <option value="hot" {{(($product->condition=='hot')? 'selected':'')}}>Hot</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="stock">Quantity <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity" value="{{ $product -> stock }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-md-3 control-label">Status <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <select name="status" class="form-control" size="1">
                            <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
                            <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-md-3 control-label">Images </label>
                    <div class=" col-md-6">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i>
                                </a>
                            </span>

                            <input id="thumbnail" class="form-control" type="file" name="images[]" multiple>
                        </div>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
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

@push('scripts')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
    var child_cat_id = '{{ $product -> child_cat_id }}';

    $('#cat_id').change(function() {

        var cat_id = $('#cat_id').val();
        // alert(cat_id);
        if (cat_id != null) {

            // Ajax call
            $.ajax({
                url: '/dashboard/categories/' + cat_id + '/child',
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    // id: cat_id
                },

                dataType: 'json',
                success: function(response) {


                    if (typeof(response) != 'object') {
                        response = $.parseJSON(response);
                    }
                    // console.log(response);
                    var html_option = "<option value=''>----Select sub category----</option>";

                    // console.log(response.data);

                    if (response.status) {
                        var data = response.data
                        if (response.data) {
                            $('#child_cat_div').removeClass('d-none')

                            data.forEach(cat => {
                                html_option += "<option  value='" + cat.id + "'  "+(child_cat_id==cat.id ? 'selected ' : '')+" >  " + cat.title + " </option>"
                            })

                        } else {
                            console.log('no response data');
                        }
                    } else {
                        $('#child_cat_div').addClass('d-none');

                    }

                    $('#child_cat_id').html(html_option);
                },
                error: function(xhr, status, error) {
                    console.log('fail');
                }
            });
        }

    });

    if (child_cat_id != null) {
        $('#cat_id').change();
    }
</script>

@endpush