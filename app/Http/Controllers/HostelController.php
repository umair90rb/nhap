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
            'state'  => 'required',
            'city'  => 'required',
            'area'  => 'required',
            'ownerName'  => 'required',
            'ownerCnic'  => 'required',
            'mobileNo'  => 'required',
            'hostelRooms'  => 'required',
            'hostelCapacity'  => 'required',
            'hostelFor'  => 'required',
            'hostelType'  => 'required',
            'hostelName'  => 'required',
            'hostelAddress'  => 'required',
            'hostelNumber'  => 'required',
            'hostelPartnerContact'  => 'required_with:hostelPartner',
            'hostelPartnerCnic'  => 'required_with:hostelPartner',
            'hostelWardenContact'  => 'required_with:hostelWarden',
            'hostelWardenCnic'  => 'required_with:hostelWarden',
            'referalCnic'  => 'required',
            'hostelBuilding'  => 'required',
            'termsAndCondition' => 'accepted',
        ]);

        Hostel::create([
            'state'  =>  $request->input('state'),
            'city'  =>  $request->input('city'),
            'area'  =>  $request->input('area'),
            'ownerName'  =>  $request->input('ownerName'),
            'ownerCnic'  =>  $request->input('ownerCnic'),
            'mobileNo'  =>  $request->input('mobileNo'),
            'hostelCapacity'  =>  $request->input('hostelCapacity'),
            'hostelRooms'  =>  $request->input('hostelRooms'),
            'hostelFor'  =>  $request->input('hostelFor'),
            'hostelType'  =>  $request->input('hostelType'),
            'hostelName'  =>  $request->input('hostelName'),
            'hostelAddress'  =>  $request->input('hostelAddress'),
            'hostelNumber'  =>  $request->input('hostelNumber'),
            'hostelPartner'  =>  $request->input('hostelPartner'),
            'hostelPartnerContact'  =>  $request->input('hostelPartnerContact'),
            'hostelPartnerCnic'  =>  $request->input('hostelPartnerCnic'),
            'hostelWarden'  =>  $request->input('hostelWarden'),
            'hostelWardenNumber'  =>  $request->input('hostelWardenNumber'),
            'hostelWardenCnic'  =>  $request->input('hostelWardenCnic'),
            'referalCnic'  =>  $request->input('referalCnic'),
            'hostelBuilding'  =>  $request->input('hBuildingnCnic'),
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
