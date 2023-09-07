<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('admin.coupons.index', compact('coupons'));
    } // End of index


    public function create()
    {
        return view('admin.coupons.create');
    } // End of create 


    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|min:2',
            'type' => 'required|in:fixed,percent',
            'status' => 'required|in:active,inactive',
            'value' => 'required|numeric'
        ]);

        $request_data = $request->except(['_token']);

        $status = Coupon::create($request_data);

        if ($status) {
            \notify()->success('Coupon Add Successfully');

            return redirect()->route('dashboard.coupons.index');
        } else {
            return back()->with(['error' => 'Something went wrong!']);
        }
    } // end of store 


    public function show(Coupon $coupon)
    {
        //
    }


    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    } // End of edit


    public function update(Request $request, Coupon $coupon)
    {
        $this->validate($request, [
            'code' => 'required|min:2',
            'type' => 'required|in:fixed,percent',
            'status' => 'required|in:active,inactive',
            'value' => 'required|numeric'
        ]);

        $request_data = $request->except(['_token']);

        $status = $coupon -> update($request_data);

        if ($status) {
            \notify()->success('Coupon Update Successfully');

            return redirect()->route('dashboard.coupons.index');
        } else {
            return back()->with(['error' => 'Something went wrong!']);
        }
    } // End of update 


    public function destroy(Coupon $coupon)
    {
        $coupon -> delete();

        \notify()->success('Coupon delete Successfully');

        return redirect() -> route('dashboard.coupons.index');
    } // end of destroy 

    public function couponStatus(Request $request)
    {

        // return($request -> all());
        // $id = $request -> id;
        // $coupon =Coupon::find($id);
        // return $coupon;
        if ( $request->mod == 'true' ) {
            DB::table('coupons')->where('id', $request->id)->update(['status' => 'active']);
            //  $coupon -> update(['status', 'active']);
            
        } else {
            DB::table('coupons')->where('id', $request->id)->update(['status' => 'inactive']);
            //  $coupon -> update(['status', 'inactive']);
        }

        return response()->json(['status' => true, 'msg' => 'Status Update Succussefully']);
    } // End of coupon status
} //  End of controller 
