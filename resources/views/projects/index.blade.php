<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Project</h1>
	<ul>
		@foreach($projects as $project)
			<li>
				<a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>