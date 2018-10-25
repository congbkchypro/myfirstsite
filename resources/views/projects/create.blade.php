<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Create a Project</h1>

	<form action="/projects" method="POST">
		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="project title">
		</div>

		<div>
			<textarea name="description" id="" cols="30" rows="10" placeholder="Project description"></textarea>
		</div>

		<div>
			<button type="submit">Create Project</button>
		</div>
	</form>
</body>
</html>
