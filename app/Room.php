<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
//	protected $fillable = [		// hiermee geef je aan welke velden specifiek ingevuld mogen worden
//		'title', 'description'
//	];
	protected $guarded = []; // Laat alles toe, handig in de ontwerp fase.

	public function devs()
	{
		return $this->hasMany(Dev::class); // Relatie tussen room en dev
	}
	public function sensors()
	{
		return $this->hasMany(Sensor::class); // Relatie tussen room en dev
	}

	public function addDev($dev)
	{
		$this->devs()->create($dev);
	}
	public function addSensor($sensor)
	{
		$this->sensors()->create($sensor);
	}	
//	public function addDev($title, $description) 
//	{
//		return Dev::create([
//			'room_id' => $this->id,
//			'title' => $title,
//			'description' => $description
//		]);

}
