<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleInfo = DB::table('customers AS v')
            ->join()
            ->select('v.id, v.registration_number', 'v.registered_owner', 'v.color','ve.first_name', 've.last_name', 've.email'
                    , 've.is_active','a1.phone_number AS primary_phone', 'a2.phone_number AS secondary_phone', 'm.name AS model_name'
                    , 'm.manufacturer', 'm.brand', 'f.name AS fuel_type')
            ->get()
            ->paginate(15);
            
        $vehicleInfo->withPath('vehicle/results');
            
        return redirect()->route('vehicle_list_route', ['vehicle_info' => $vehicleInfo]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
