<?php

namespace App\Http\Controllers;
use App\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $staffs = Staff::All();
       return view('staff.index',compact('staffs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('staff.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new  Staff;
        $staff->staff_id =$request ->staff_id;
        $staff->staff_name =$request ->staff_name;
        $staff->languages =$request ->languages;
        $staff->mobile_number =$request ->mobile_number;
        $staff->save();
        return redirect('/staff');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $staff= Staff ::find ($id);
=======
        $staff= Staff::find($id);
>>>>>>> fde5f9f3d7e73d3878b587d5ea3ccf1125377399
        return view('staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
      */
    public function edit($id)
    {
<<<<<<< HEAD
        $staff= Staff ::find ($id);
        return view('staff.show',compact('staff'));
=======
        $staff= Staff::find ($id);
        return view('staff.edit',compact('staff'));
>>>>>>> fde5f9f3d7e73d3878b587d5ea3ccf1125377399
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $staff= Staff ::find ($id);
=======
        $staff= Staff::find ($id);
>>>>>>> fde5f9f3d7e73d3878b587d5ea3ccf1125377399
        $staff->staff_id =$request->staff_id;
        $staff->staff_name =$request->staff_name;
        $staff->languages =$request->languages;
        $staff->mobile_number =$request->mobile_number;
        $staff->update();
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff =  Staff::find($id);
        $staff->delete();

        return redirect('/staff');
    }
}
