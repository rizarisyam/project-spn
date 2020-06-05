<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Transaction;
use App\User;
use App\Vehicle;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $supir = Driver::all();
        $kendaraan = Vehicle::all();
        $transaksi = Transaction::all();
        $users = User::all();

        return view('dashboard', compact('supir', 'kendaraan', 'transaksi', 'users'));
    }
}
