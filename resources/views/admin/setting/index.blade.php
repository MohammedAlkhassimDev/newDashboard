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
                <h2><strong>settings</strong> </h2>
            </div>
            <!-- END Form Elements Title -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Basic Form Elements Content -->
            <form action="{{route ('dashboard.setting.update')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                <input type="text" name="id" hidden value="{{ $setting -> id }}">

                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-text-input" >Phone</label>
                    <div class="col-md-9">
                        <input type="text" id="phone" name="phone"  value="{{ $setting-> phone }}" class="form-control">
                        <!-- <span class="help-block">This is a help text</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-email-input">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="email" name="email" value="{{ $setting-> email }}" class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-password-input">Instagram</label>
                    <div class="col-md-9">
                        <input type="text" id="instagram" name="instagram" value="{{ $setting-> instagram }}" class="form-control">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-password-input">Facebook</label>
                    <div class="col-md-9">
                        <input type="text" id="facebook" name="facebook" value="{{ $setting-> facebook }}" class="form-control">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-file-input">Logo</label>
                    <div class="col-md-9">
                        <input type="file" id="logo" name="logo">
                    </div>
                    <br>
                    <img src="{{ asset($setting -> logo) }}" style="height : 50px; margin-top: 10px;" alt="">
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-file-input">Favicon</label>
                    <div class="col-md-9">
                        <input type="file" id="favicon" name="favicon">
                    </div>
                </div>

                @foreach (config('app.languages') as $key => $language)
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="{{$key}}[title]">Title {{$key}}</label>
                        <div class="col-md-12">
                            <input type="text" id="{{$key}}[title]" name="{{$key}}[title]" value="{{$setting-> translate($key) ->title}}" class="form-control">
                            <!-- <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="{{$key}}[meta]">Meta {{$key}}</label>
                        <div class="col-md-12">
                            <input type="text" id="{{$key}}[meta]" name="{{$key}}[meta]" value="{{$setting-> translate($key) ->meta}}" class="form-control">
                            <!-- <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="{{$key}}[content]">Content {{$key}}</label>
                    <div class="col-md-9">
                        <textarea id="{{$key}}[content]" name="{{$key}}[content]" rows="9" class="form-control" placeholder="Content..">
                        {{$setting-> translate($key) ->content}}
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="{{$key}}[address]">Address {{ $key }}</label>
                    <div class="col-md-9">
                        <textarea id="{{$key}}[address]" name="{{$key}}[address]" rows="9" class="form-control" placeholder="Content..">
                        {{$setting-> translate($key) ->address}}
                        </textarea>
                    </div>
                </div>
                @endforeach





                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit </button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset </button>
                    </div>
                </div>
            </form>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
    </div>

</div>

@endsection
