<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Room;

class RoomsSensorsController extends Controller
{
    public function store(Room $room)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'], 
            'description' => ['required', 'min:5']
        ]);
        $room->addSensor($attributes);

    	return back();
    }


}
