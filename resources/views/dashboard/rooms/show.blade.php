@extends('layout')

@section('content')
	<div class="contentDevice">
		<h3>{{ $room->title }}</h3>
		<p>{{ $room->description }}</p>
		<div class="optionsMenu">
			<a href="/dashboard/rooms/{{ $room->id }}/edit"><button class="editButton">Kamer bewerken</button></a>
			<form class="formDevice" method="POST" action="/dashboard/rooms/{{ $room->id }}">
			@method('DELETE')
				@csrf	
				<button type="submit" class="deleteButton">Kamer verwijderen</button>
			</form>
		</div>
		@if ($room->devs->count())
			<div class="deviceInfo">
				@foreach ($room->devs as $dev)
				<div class="deviceInfoDevice">
					<p>{{ $dev->title }}</p>
					<p>{{ $dev->description }}</p>
					<p>{{ $dev->status }}</p>
					<p>{{ $dev->colorhex }}</p>
					<p>{{ $dev->brightness }}</p>
				</div>
				@endforeach
			</div>
		@endif
		@if ($room->sensors->count())
			<div class="sensorInfo">
				@foreach ($room->sensors as $sensor)
				<div class="sensorInfoSensor">
					<p>{{ $sensor->title }}</p>
					<p>{{ $sensor->description }}</p>
					<p>{{ $sensor->celcius }}</p>
					<p>{{ $sensor->fahrenheit }}</p>
				</div>
				@endforeach
			</div>
		@endif

{{-- Lamp toevoegen formulier --}}
	<div class="contentAddItem">
		<div class="addLamp">
			<h3>Nieuwe Lamp toevoegen</h3>
			<form method="POST" action="/dashboard/rooms/{{ $room->id }}/devs">
				@csrf			
				<input type="text" name="title" placeholder="Lamp naam"  value="{{ old('title') }}">
				<textarea name="description" placeholder=" Lamp beschrijving" >{{ old('description') }}</textarea>
				<button type="submit">Lamp toevoegen</button>	
			</form>
			@if ($errors->any())
			<div class="errorNotification">
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
		</div>
		{{-- Sensor toevoegen formulier --}}
		<div class="addSensor">
			<h3>Nieuwe Sensor toevoegen</h3>
			<form method="POST" action="/dashboard/rooms/{{ $room->id }}/sensors">
				@csrf			
				<input type="text" name="title" placeholder="Sensor naam"  value="{{ old('title') }}">
				<textarea name="description" placeholder=" Sensor beschrijving" >{{ old('description') }}</textarea>
				<button type="submit">Sensor toevoegen</button>	
			</form>
			@if ($errors->any())
			<div class="errorNotification">
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif	
		</div>	

@endsection