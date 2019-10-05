<!DOCTYPE html>
<html>
<head>
	<title>About us </title>
</head>
<body>
	<h1>
		About us
	</h1>
	
	@foreach ($tasks as $task)
	<li> {{ $task->body }}</li>
	@endforeach
	
	

</body>
</html>