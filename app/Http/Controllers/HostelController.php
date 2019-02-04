<?php

namespace App\Http\Controllers;

use App\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hostel.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'cnic'  => 'required',
            'mobileNo'  => 'required',
            'referalCnic'  => 'required',
            'transactionDetail'  => 'required',
            'hostelRegistrationNo'  => 'required',
            'termsAndCondition' => 'accepted',
        ]);

        Member::create([
            'name'  =>  $request->input('name'),
            'cnic'  =>  $request->input('cnic'),
            'mobile_no'  =>  $request->input('mobileNo'),
            'referal_cnic'  =>  $request->input('referalCnic'),
            'transaction_detail'  =>  $request->input('transactionDetail'),
            'hostel_registration_no'  =>  $request->input('hostelRegistrationNo'),
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function show(Hostel $hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostel $hostel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hostel $hostel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostel $hostel)
    {
        //
    }
}
