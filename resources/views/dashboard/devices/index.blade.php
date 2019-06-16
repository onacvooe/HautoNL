<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<h1>Apparaten</h1>
		@foreach ($devices as $device)

			<div class="device">
				<a href="/devices/{{ $device->id }}">
					<h3>{{ $device->title }}</h3>
					<p>{{ $device->description }}</p>
				</a>
			</div>
			<div class="optionsMenu">
				<a href="/devices/{{ $device->id }}/edit"><button>Apparaat bewerken</button></a>
				<form method="POST" action="/devices/{{ $device->id }}">
				@method('DELETE')
					@csrf	

					<button type="submit" class="button">Apparaat verwijderen</button>
				</form>
			</div>


		@endforeach		
	</body>
</html>
