<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<h1>Apparaten aanmaken</h1>
		<form method="POST" action="/devices">
			@csrf
			<input type="text" name="title" placeholder="Apparaat naam" required value="{{ old('title') }}">
			<textarea name="description" placeholder="Apparaat beschrijving" required>{{ old('description') }}</textarea>
			<button type="submit">Maak apparaat</button>
		</form>
		@if ($errors->any())
		<div class="notification">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif		
	</body>
</html>
