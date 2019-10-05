<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
</head>
<body>
	<h1>
		All Tasks
	</h1>
	
	@foreach ($tasks as $task)
	<li><a href="task/{{$task->id}}"> {{ $task->body }}</a></li>
	@endforeach
	
	

</body>
</html>