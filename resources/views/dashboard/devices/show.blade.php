@extends('layout')

@section('content')
	<h3>{{ $device->title }}</h3>
	<p>{{ $device->description }}</p>
			<div class="optionsMenu">
				<a href="/devices/{{ $device->id }}/edit"><button>Apparaat bewerken</button></a>
				<form method="POST" action="/devices/{{ $device->id }}">
				@method('DELETE')
					@csrf	

					<button type="submit" class="button">Apparaat verwijderen</button>
				</form>
			</div>
@endsection