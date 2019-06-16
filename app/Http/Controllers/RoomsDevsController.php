<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dev;
use App\Room;

class RoomsDevsController extends Controller
{
    public function store(Room $room)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'], 
            'description' => ['required', 'min:3']
        ]);
        $room->addDev($attributes);

    	return back();
    }


}
