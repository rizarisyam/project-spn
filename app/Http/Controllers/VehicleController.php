<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = Vehicle::all();

        return view('vehicle.index', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nopol' => 'required|unique:vehicles,nopol',
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required',
        ]);

        Vehicle::create([
            'nopol' => $request->nopol,
            'merek' => $request->merek,
            'model' => $request->model,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('vehicle.index')->with('pesan', 'Data added successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicle.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $this->validate($request,[
            'nopol' => 'required|unique:vehicles,nopol,'.$vehicle->id,
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required',
        ]);

        Vehicle::where('id',$vehicle->id)->update([
            'nopol' => $request->nopol,
            'merek' => $request->merek,
            'model' => $request->model,
            'tahun' => $request->tahun,
        ]);


        return redirect()->route('vehicle.index')->with('pesan', 'Data updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('pesan', 'Data deleted successfuly!');
    }
}
