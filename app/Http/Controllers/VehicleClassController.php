<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\VehicleClass;
use App\Season;
use App\DefaultPrice;
use App\PricingType;
use Validator;
use Illuminate\Support\Facades\Input;

class VehicleClassController extends Controller {

    /**
     * only when logged in
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Route to decide what should be the action of the form submitting to it
     *
     * @return \Illuminate\Http\Response
     */
    public function processInputBasedRequest(Request $request) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id' => 'required|numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process
        if ($validator->fails()) {
            return back();
        }

        //this is meant to handle only one request at a time not both
        if ($request->has('delete') && $request->has('deactivate')) {
            return back();
        } else if ($request->has('delete')) {
            return VehicleClassController::destroy($request->id);
        } else if ($request->has('deactivate')) {
            $vehicleClass = VehicleClass::find($request->id);
            if(0 === strcasecmp($request->deactivate, 'false')) {
                $vehicleClass->is_active = FALSE;
            }
            else if(0 === strcasecmp($request->deactivate, 'true')) {
                $vehicleClass->is_active = TRUE;
            }
            $vehicleClass->save();
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vehicleClasses = VehicleClass::all();
        return view('/vehicle/class/listing', ['vehicle_classes' => $vehicleClasses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $seasons = Season::all();
        $pricingTypes = PricingType::all();
        return view('/vehicle/class/create', ['seasons' => $seasons, 'pricing_types' => $pricingTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'class_name' => 'required',
            'class_desc' => 'required',
            'disp_order' => 'required',
            'class_image' => 'url',
        );

        $seasons = Season::all();
        $pricing_types = PricingType::all();

        foreach ($seasons as $season) {
            foreach ($pricing_types as $pricingType) {
                $rules[$season->id . '::' . $pricingType->id] = 'required|numeric';
            }
        }

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($seasons, $pricing_types, $request) {
                // store
                $vehicleClass = new VehicleClass;
                $vehicleClass->name = Input::get('class_name');
                $vehicleClass->description = Input::get('class_desc');
                $vehicleClass->display_order = Input::get('disp_order');
                $vehicleClass->photo_id = Input::get('class_image');
                $vehicleClass->is_active = 1;

                $vehicleClass->save();
                foreach ($seasons as $season) {
                    foreach ($pricing_types as $pricingType) {
                        $prices = new DefaultPrice;

                        if ($request->has($season->id . '::' . $pricingType->id)) {
                            $prices->pricing_type_id = $pricingType->id;
                            $prices->pricing_season_id = $season->id;
                            $prices->rate = Input::get($season->id . '::' . $pricingType->id);
                            $vehicleClass->prices()->save($prices);
                        }
                    }
                }
            });
            return redirect()->route('vehicle_class_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $vehicleClassInfo = VehicleClass::where('id', '=', $id)->first();
        $seasons = Season::all();
        $pricingTypes = PricingType::all();
        return view('/vehicle/class/show', ['vehicle_class_info' => $vehicleClassInfo, 'seasons' => $seasons, 'pricing_types' => $pricingTypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $seasons = Season::all();
        $pricing_types = PricingType::all();
        $vehicleClass = VehicleClass::find($id);
        return view('/vehicle/class/edit', ['vehicle_class' => $vehicleClass, 'seasons' => $seasons, 'pricing_types' => $pricing_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
// validate
// read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'class_name' => 'required',
            'class_desc' => 'required',
            'disp_order' => 'required',
            'class_image' => 'url',
        );
        $seasons = Season::all();
        $pricing_types = PricingType::all();

        foreach ($seasons as $season) {
            foreach ($pricing_types as $pricingType) {
                $rules[$season->id . '::' . $pricingType->id] = 'required|numeric';
                $rules[$season->id . '::' . $pricingType->id . '::id'] = 'required|numeric';
            }
        }

        $validator = Validator::make(Input::all(), $rules);

// process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($seasons, $pricing_types, $request) {
                // store
                $vehicleClass = VehicleClass::where('id', '=', Input::get('vehicle_class_id'))->first();
                $vehicleClass->name = Input::get('class_name');
                $vehicleClass->description = Input::get('class_desc');
                $vehicleClass->display_order = Input::get('disp_order');
                $vehicleClass->photo_id = Input::get('class_image');
                $vehicleClass->is_active = 1;

                $vehicleClass->save();
                foreach ($seasons as $season) {
                    foreach ($pricing_types as $pricingType) {
                        $prices = $vehicleClass->prices->where('pricing_type_id', '=', $pricingType->id)
                                        ->where('pricing_season_id', '=', $season->id)->first();

                        if ($request->has($season->id . '::' . $pricingType->id)) {
                            $prices->pricing_type_id = $pricingType->id;
                            $prices->pricing_season_id = $season->id;
                            $prices->rate = Input::get($season->id . '::' . $pricingType->id);
                            $vehicleClass->prices()->save($prices);
                        }
                    }
                }
            });

            return redirect()->route('vehicle_class_list_route');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        DB::transaction(function () use ($id) {
            $vehicleClass = VehicleClass::where('id', $id)->first();
            $prices = $vehicleClass->prices;

            foreach ($prices as $price) {
                $price->delete();
            }

            $vehicleClass->delete();
        });
        return redirect()->route('vehicle_class_list_route');
    }

}
