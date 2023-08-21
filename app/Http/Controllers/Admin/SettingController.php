<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::checkSetting();

        return view('admin.setting.index',  compact ('setting'));
    } //  end of index 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = [
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'phone' => 'nullable|numeric',
            'email' => 'nullable|email',
        ];

        foreach (config('app.languages') as $key => $value) {
            $data[$key.'*.title'] = 'nullable|string';
            $data[$key.'*.meta'] = 'nullable|string';
            $data[$key.'*.content'] = 'nullable|string';
            $data[$key.'*.address'] = 'nullable|string';
        }

        $request -> validate($data);

        $request_data = $request -> except(['_token', 'logo', 'favicon']);

        if ($request -> has ('logo')) {
            $file = $request -> logo;
            $filename = mt_rand(1000000, 9999999) . $file -> getClientOriginalName();

            $file -> move (public_path('media'), $filename);

            $request_data['logo'] = $filename;

        }

        if ($request -> has('favicon')) {
            $file = $request -> favicon ;
            $filename = mt_rand(1000000, 9999999) . $file -> getClientOriginalName();

            $file -> move (public_path('media'), $filename);

            $request_data['favicon'] = $filename;
        }


        $setting = Setting::find( $request -> id );

        if (  $setting ) {
            $setting -> update($request_data);
            return redirect() -> back() -> with ('Update Successful'); 
        } 

        return redirect() -> back() -> with ('Please try again !!'); 

       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
