@extends('layout')
@section('content')
	<div class="contentContainer">
		<div class="titleBar">
			<h1 class="title">Dashboard</h1>
			<a href="/dashboard/rooms/create">
				<button class="actionItem">Kamer aanmaken</button>
			</a>
		</div>
		@foreach ($rooms as $room)

			<div class="room">
				<a href="/dashboard/rooms/{{ $room->id }}">
					<h3>{{ $room->title }}</h3>
					<p>{{ $room->description }}</p>
				</a>
				<div class="optionsMenu">
					<a href="/dashboard/rooms/{{ $room->id }}/edit"><button class="button is-Normal">Kamer bewerken</button></a>
					<form method="POST" action="/dashboard/rooms/{{ $room->id }}">
					@method('DELETE')
					@csrf	

						<button type="submit" class="button is-Danger">Kamer verwijderen</button>
					</form>
				</div>				
			</div>

		@endforeach
	</div>
@endsection
