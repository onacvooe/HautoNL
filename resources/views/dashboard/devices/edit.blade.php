@extends('layout')

@section('content')
	<h1>Bewerk Apparaat</h1>
	<form method="POST" action="/devices/{{ $device->id }}">
	@method('PATCH')
	@csrf

		<label class="label" for="title">Titel</label>
		<input type="text" class="input" name="title" placeholder="Titel" value="{{ $device->title }}" required>
		<textarea name="description" class="textarea" required>{{ $device->description }}</textarea>
		<button type="submit" class="button">Bewerking Opslaan</button>
	</form>
	<form method="POST" action="/devices/{{ $device->id }}">
	@method('DELETE')
	@csrf
	
		<button type="submit" class="button">Apparaat verwijderen</button>
	</form>	

@endsection