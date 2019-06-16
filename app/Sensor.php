<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
	protected $guarded = []; // Laat alles toe, handig in de ontwerp fase.
    public function room()
    {
    	return $this->belongsTo(Room::class); // Relatie dev en room
    }
}

