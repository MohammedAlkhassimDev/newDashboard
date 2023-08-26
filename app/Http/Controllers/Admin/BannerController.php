<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Traits\UploadSingleImageTrait;

use Illuminate\Support\Str;

class BannerController extends Controller
{
    use UploadSingleImageTrait;


    public function index() {

        $banners = Banner::get();
        return view ('admin.banners.index', compact('banners'));
    } // End of index

    public function create () {
        return view ('admin.banners.create');
    } // End of create

    public function store (Request $request) {
        // return "banner store";
        $this->validate($request, [
            // 'title'=>'string|required',
        ]);

        $request_data = $request->except(['_token' , 'photo']);

        if ($request->has('photo')) {
            // upload photo
            $request_data['photo'] = $this->UploadSinglePhoto($request -> photo , '/media/banners');
        }

        $slug = Str ::slug($request->en['title']);
        $count = banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        Banner::create($request_data);

        \notify()->success('banner Add Successfully');

        return redirect()->route('dashboard.banners.index');

    } // End store

    public function edit (Banner $banner) {
        return view ('admin.banners.edit', compact('banner'));
    } // End of banner

    public function update (Request $request, banner $banner) {
        $this->validate($request, [
            // 'title'=>'string|required',
        ]);

        $request_data = $request->except(['_token']);

        if ($request->has('photo')) {
            // upload photo
            $request_data['photo'] = $this->UploadSinglePhoto($request -> photo , '/media/products');
        }

        $slug = Str ::slug($request->en['title']);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        $banner -> update($request_data);

        \notify()->success('banner Updated Successfully');


        return redirect()->route('dashboard.banners.index');
    } // End of update

    public function destroy (Banner $banner) {
        $banner -> delete();

        \notify()->success('banner Deleted Successfully');

        return redirect()->route('dashboard.banners.index');
    } // End of destroy

} // End of controller