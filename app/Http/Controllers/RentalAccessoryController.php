<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\RentalAccessory;
use App\Currency;
use App\PricingType;
use Validator;
use Illuminate\Support\Facades\Input;

class RentalAccessoryController extends Controller {

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
            'id' => 'exists:rental_accessories,id',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process
        if ($validator->fails()) {
            return back();
        }

        if ($request->has('delete')) {
            return RentalAccessoryController::destroy($request->id);
            return back();
        }
        //logic to handle any extra form submits goes here
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rentalAccessories = RentalAccessory::all();
        return view('/rental/accessories/listing', ['rental_accessories' => $rentalAccessories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $pricingTypes = PricingType::all();
        $currencies = Currency::all();
        return view('/rental/accessories/create', ['pricing_types' => $pricingTypes, 'currencies' => $currencies]);
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
            'code' => 'required',
            'name' => 'required',
            'taxable' => [Rule::in(['on', 'off'])],
            'calculation' => 'required|exists:pricing_types,id',
            'rate' => 'required|numeric',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($request) {
                // store
                $rentalAccessory = new RentalAccessory;
                $rentalAccessory->name = Input::get('name');
                $rentalAccessory->code = Input::get('code');
                $rentalAccessory->is_taxable = Input::get('taxable') === 'on'? true : false;
                $rentalAccessory->pricing_type_id = Input::get('calculation');
                $rentalAccessory->rate = Input::get('rate');

                $rentalAccessory->save();
            });
            return redirect()->route('accessory_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $rentalAccessory = RentalAccessory::where('id', '=', $id)->first();
        return view('/rental/accessories/show', ['rental_accessory' => $rentalAccessory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $pricingTypes = PricingType::all();
        $rentalAccessory = RentalAccessory::find($id);
        return view('/rental/accessories/edit', ['rental_accessory' => $rentalAccessory, 'pricing_types' => $pricingTypes]);
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
            'code' => 'required',
            'name' => 'required',
            'taxable' => [Rule::in(['on', 'off'])],
            'calculation' => 'required|exists:pricing_types,id',
            'rate' => 'required|numeric',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($request, $id) {
                // store
                $rentalAccessory = RentalAccessory::find($id);
                $rentalAccessory->name = Input::get('name');
                $rentalAccessory->code = Input::get('code');
                $rentalAccessory->is_taxable = Input::get('taxable') === 'on'? true : false;
                $rentalAccessory->pricing_type_id = Input::get('calculation');
                $rentalAccessory->rate = Input::get('rate');

                $rentalAccessory->save();
            });
            return redirect()->route('accessory_list_route');
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
            $rentalAccessory = RentalAccessory::where('id', $id)->first();

            $rentalAccessory->delete();
        });
        return redirect()->route('accessory_list_route');
    }
}
