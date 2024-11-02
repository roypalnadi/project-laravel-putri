<?php

namespace App\View\Components\Forms;

use App\Models\Room;
use Illuminate\View\Component;

class DropdownRoom extends Component
{
    protected $status;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status = null)
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = Room::query()->when($this->status, function ($query, $status) {
            $query->where('status', $status);
        })->select("id", "room_number AS name")->get();

        return view('components.forms.dropdown-room', [
            "data" => $data,
        ]);
    }
}
