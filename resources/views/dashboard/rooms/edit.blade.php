@extends('layout')
@section('content')
	<div class="contentContainer">
		<div class="titleBar">
			<h1 class="title">Kamer bewerken</h1>
		</div>
		<form class="editForm" method="POST" action="/dashboard/rooms/{{ $room->id }}">
		@method('PATCH')	
			@csrf			
			<label class="label" for="title">Kamer titel</label>
			<input type="text" class="input" name="title" placeholder="Titel" value="{{ $room->title }}" required>
			<label class="label" for="description">Kamer omschrijving</label>
			<textarea name="description" class="textarea" required>{{ $room->description }}</textarea>
			<button type="submit" class="button">Bewerking Opslaan</button>
			<a href="/dashboard">TERUG</a>
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