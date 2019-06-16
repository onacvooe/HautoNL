<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Room;

class RoomsController extends Controller
{


    public function index()
    {
    	$rooms = \App\Room::all();
    	return view('dashboard.rooms.index', compact('rooms'));
    }
    

    public function create()
    {
    	return view('dashboard.rooms.create');
    }    
    

    public function show(Room $room)
    {
    	return view('dashboard.rooms.show', compact('room'));
    } 


    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'] 
        ]);
    	//return request()->all(); Alle informatie terugkrijgen van DB
    	Room::create($attributes);
     	return redirect('/dashboard');
    } 


    public function edit(Room $room)
    {

    	return view('dashboard.rooms.edit', compact('room'));
    } 


    public function update(Room $room)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'] 
        ]);
        //return request()->all(); Alle informatie terugkrijgen van DB
    	$room->update(request(['title', 'description']));
    	return redirect('/dashboard');
    } 


    public function destroy(Room $room)
    {
    	$room->delete();
    	return redirect('/dashboard');

    } 





}
