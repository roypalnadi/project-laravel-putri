<?php

namespace App\View\Components\Reservation;

use App\Models\Room;
use Illuminate\View\Component;

class ReservationTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reservation.reservation-table', [
            "data" => Room::query()->orderBy("room_number")->paginate(10)
        ]);
    }
}
