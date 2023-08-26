<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Traits\UploadSingleImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadSingleImageTrait;

    public function index()
    {

        $products = Product::getAllProducts();
        return view('admin.products.index', compact('products'));
    } // End of index


    public function create()
    {
        $brands = Brand::all();

        $categories = Category::where('is_parent', 1) -> get();

        return view ('admin.products.create', compact(['categories', 'brands']));
    } // End of create


    public function store(Request $request)
    {
        $request_data = $request -> except(['_token', 'photo', 'images']);

        if ($request->has('photo')) {
            // upload photo
            $request_data['photo'] = $this->UploadSinglePhoto($request -> photo , '/media/products');
        }

        $slug = Str::slug($request->en['title']);
        $count = Product::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        $request_data['is_featured']= $request->input('is_featured',0);

        $product =Product::create($request_data);

        if ($request->has('images')) {

            foreach ($request->images as $imagefile) {
                $image = new ProductImages();
                $file= $imagefile;
                $filename1= mt_rand(1000000, 9999999) . $imagefile->getClientOriginalName();
                $file-> move(public_path('media/products/'), $filename1);
                $data['image1']= $filename1;
                $image->url = $data['image1'];
                $image->product_id = $product->id;
                $image->save();
            }

        }

        \notify()->success('Product Add Successfully');

          return redirect()->route('dashboard.products.index');


    } // End od store


    public function show(Product $product)
    {
        //
    } // End of show


    public function edit(Product $product)
    {
        $brands = Brand::get();
        $categories = Category::where('is_parent', 1) -> get();
        return view ('admin.products.edit', compact('categories', 'brands', 'product'));
    } // End of edit


    public function update(Request $request, Product $product)
    {
        // return $request -> all();

        $request_data = $request->except(['_token', 'photo', 'images']);
        $request_data['is_featured']=$request->input('is_featured',0);

        if ($request->has('photo')) {
            // upload photo
            $request_data['photo'] = $this->UploadSinglePhoto($request -> photo , '/media/products');
        }

        $product -> update($request_data);

        \notify()->success('Product Updated Successfully');


        return redirect()->route('dashboard.products.index');

    } // End of update

    public function destroy(Product $product)
    {

        $product -> delete();

        \notify()->success('Product Deleted Successfully');


        return redirect()->route('dashboard.products.index');
    } // End of destroy
}