<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\UploadSingleImageTrait;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    use UploadSingleImageTrait;

    public function index()
    {
        $categories = Category::getAllCategory();

        return view('admin.categories.index', compact('categories'));
    }  // end of category


    public function create()
    {

        $parent_cats = Category::where('is_parent', 1)->orderBy('slug', 'ASC')->get();

        return view('admin.categories.create', compact('parent_cats'));
    } // End of create


    public function store(Request $request)
    {

        $data = [
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'is_parent' => 'sometimes|in:1',
            'parent_id' => 'nullable|exists:categories,id',

        ];



        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.summary'] = 'nullable|string';
        }

        $request->validate($data);

        // return 123;

        $request_data = $request->except(['_token', 'image']);

        if ($request->has('image')) {
            // upload photo
            $request_data['photo'] = $this->UploadSinglePhoto($request -> image , '/media/categories/');
        }

        $slug = Str::slug($request->en['title']);
        $count = Category::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $request_data['slug'] = $slug;

        if ($request->has('is_parent'))
            $request_data['is_parent'] = 1;
        else
            $request_data['is_parent'] = 0;

        Category::create($request_data);

        \notify()->success('Category Add Successfully');


        return redirect()->route('dashboard.categories.index');
    } // End of store

    public function edit(Category $category)
    {
        $parent_cats = Category::where('is_parent',  1)->orderBy('slug', 'ASC')->get();

        return view('admin.categories.edit', compact('parent_cats', 'category'));
    } //  end of edit


    public function update(Request $request, Category $category)
    {

        // dd($request -> all());
        $this->validate($request, [
            // 'title'=>'string|required',
            // 'summary'=>'string|nullable',
            'photo' => 'string|nullable',
            'status' => 'required|in:active,inactive',
            // 'is_parent'=>'sometimes|in:1',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $request_data = $request->except(['_token', 'image']);

        if ($request->has('image')) {

            $request_data['photo'] = $this->UploadSinglePhoto($request -> image, '/media/categories/');
        } // end upload image

        // $slug = Str::slug($request->en['title']);
        // $count = Category::where('slug', $slug)->count();
        // if ($count > 0) {
        //     $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        // }

        // $request_data['slug'] = $slug;

        $request_data['is_parent'] = $request->input('is_parent', 0);

        if ($request->has('is_parent')) {
            $request_data['is_parent'] = 1;
            $request_data['parent_id'] = null;
        } else {
            $request_data['parent_id'] = $request->parent_id;
            $request_data['is_parent'] = 0;
        }

        $category->update($request_data);

        \notify()->success('Category Updated Successfully');


        return redirect()->route('dashboard.categories.index');
    } // end of update


    public function destroy(Category $category)
    {
        $child_cat_id = Category::where('parent_id',  $category->id)->pluck('id');
        // return  $cat_child_id; //
        $status = $category->delete();

        if ($status) {
            if (count($child_cat_id) > 0) {
                Category::shiftChild($child_cat_id);
            }
            // request ->session() -> flash ('success','Category successfully deleted');
        } else {
            // request()->session()->flash('error','Error while deleting category');
        }

        \notify()->success('Category Deleted Successfully');

        return redirect()->route('dashboard.categories.index');
    } // End of destroy

    public function getChildByParent (Request $request) {

        $parent_id = $request->id;

        $child_cats = Category::where('parent_id', $parent_id) -> get();
    //     DB::table('categories')
    // ->select('title AS new_column_name', 'another_original_column AS another_new_column')
    // ->where('parent_id', $parent_id)
    // Add any additional queries or conditions as needed
    // ->get();
        // return $child_cats;

        if (count($child_cats) > 0) {

            return response() -> json (['data' => $child_cats , 'status' => true]);
        }else {
            return response()->json(['status'=>false,'msg'=>'','data'=>null]);
        }

    } // End of getChildByParent

} // End of controller
