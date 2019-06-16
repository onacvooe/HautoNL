<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Device;

class DevicesController extends Controller
{
    

    public function index()
    {
    	$devices = \App\Device::all();
    	return view('dashboard.devices.index', compact('devices'));
    }


    public function create()
    {
    	return view('dashboard.devices.create');
    }


    public function show(Device $device)
    {
    	return view('dashboard.devices.show', compact('device'));
    }
    
    
    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'] 
        ]);
        //return request()->all(); Alle informatie terugkrijgen van DB
        Device::create($attributes);
        return redirect('/dashboard/devices');
    }


    public function edit(Device $device)
    {
    	return view('dashboard.devices.edit', compact('device'));
    } 


    public function update(Device $device)
    {
    	$device->update(request(['title', 'description']));
    	return redirect('/dashboard/devices');
    } 


    public function destroy(Device $device)
    {
    	$device->delete();
    	return redirect('/dashboard/devices');
    }         
}
