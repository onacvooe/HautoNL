<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
//	protected $fillable = [		// hiermee geef je aan welke velden specifiek ingevuld mogen worden
//		'title', 'description'
//	];
	protected $guarded = []; // Laat alles toe, handig in de ontwerp fase.
}