<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index() {

        $brands = Brand::get();
        return view ('admin.brands.index', compact('brands'));
    } // End of index

    public function create () {
        return view ('admin.brands.create');
    } // End of create

    public function store (Request $request) {
        // return "brand store";
        $this->validate($request, [
            // 'title'=>'string|required',
        ]);

        $request_data = $request->except(['_token']);

        $slug = Str ::slug($request->en['title']);
        $count = Brand::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        Brand::create($request_data);

        \notify()->success('Brand Add Successfully');

        return redirect()->route('dashboard.brands.index');

    } // End store

    public function edit (Brand $brand) {
        return view ('admin.brands.edit', compact('brand'));
    } // End of brand

    public function update (Request $request, Brand $brand) {
        $this->validate($request, [
            // 'title'=>'string|required',
        ]);

        $request_data = $request->except(['_token']);

        $slug = Str ::slug($request->en['title']);
        $count = Brand::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        $brand -> update($request_data);

        \notify()->success('Brand Updated Successfully');


        return redirect()->route('dashboard.brands.index');
    } // End of update

    public function destroy (Brand $brand) {
        $brand -> delete();

        \notify()->success('Brand Deleted Successfully');

        return redirect()->route('dashboard.brands.index');
    } // End of destroy

} // End of controller