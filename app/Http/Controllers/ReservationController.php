<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function save(Request $request)
    {
        $request->validate([
            "event" => "required",
            "check_in" => "required",
            "check_out" => "required",
            "room_id" => "required",
            "reservation_gender" => "required",
        ]);

        $model = new Reservation;
        $model->fill($request->all());
        $model->save();

        return redirect()->route("pemesanan.index");
    }
}
