<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Vehicle;
use App\Driver;
use App\Rent;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supir = Rent::all();
        // $supir->all();

        $kendaraan = Rent::all();
        // $kendaraan->all();
        return view('transaction.create', compact('supir','kendaraan'));
    }

    public function findNopol(Request $request)
    {
        $vehicle_id = Rent::where('driver_id', $request->id)->select('vehicle_id')->get()->toArray();
        $nopol = Vehicle::where('id', $vehicle_id)->select('id','nopol')->get()->toArray();
        return response()->json($nopol);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->vehicle_id);

        $this->validate($request, [
            'driver_id' => 'required',
            'vehicle_id' => 'required',
            'jenis_material' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'muatan' => 'required',
            'trip' => 'required'
        ]);

        Transaction::create([
            'driver_id' => $request->driver_id,
            'vehicle_id' => $request->vehicle_id,
            'jenis_material' => $request->jenis_material,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'muatan' => $request->muatan,
            'trip' => $request->trip
        ]);

        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
