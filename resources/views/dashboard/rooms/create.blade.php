@extends('layout')
@section('content')
	<div class="contentContainer">
		<div class="titleBar">
			<h1 class="title">Kamer aanmaken</h1>
		</div>
		<form class="editForm" method="POST" action="/dashboard/rooms">
			@csrf			
			<input type="text" name="title" placeholder="Kamer naam" required value="{{ old('title') }}">
			<textarea name="description" placeholder="Kamer beschrijving" required>{{ old('description') }}</textarea>
			<button type="submit">Kamer opslaan</button>
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

