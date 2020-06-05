<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Rent;
use App\Vehicle;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent = Rent::all();
        return view('rent.index', compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $supir = Driver::all();
        // $kendaraan = Vehicle::all();
        // return view('rent.create',compact('supir','kendaraan'));
        $supir = Driver::pluck('nama', 'id');
        $supir->all();

        $kendaraan = Vehicle::pluck('model', 'id');
        $kendaraan->all();
        return view('rent.create', compact('supir', 'kendaraan'));
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
            'driver_id' => 'required|unique:rents,driver_id',
            'vehicle_id' => 'required|unique:rents,vehicle_id'
        ]);

        Rent::create([
            'driver_id' => $request->driver_id,
            'vehicle_id' => $request->vehicle_id
        ]);

        return redirect()->route('rent.index')->with('pesan', 'Data added successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        return view('rent.edit',compact('rent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        $this->validate($request, [
            'driver_id' => 'required|unique:rents,driver_id,'.$rent->id,
            'vehicle_id' => 'required|unique:rents,vehicle_id,'.$rent->id
        ]);

        Rent::where('id', $rent->id)->update([
            'driver_id' => $request->driver_id,
            'vehicle_id' => $request->vehicle_id
        ]);

        return redirect()->route('rent.index')->with('pesan', 'Data updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();
        return redirect()->route('rent.index')->with('pesan','Data deleted successfuly!');
    }
}
