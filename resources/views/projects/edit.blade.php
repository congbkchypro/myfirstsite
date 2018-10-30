@extends('layout')

@section('content')
	<h1>Edit Project</h1>

	<form action="/projects/{{ $project->id }}" method="POST">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $project->description }}</textarea>
		</div>

		<button type="submit" class="btn btn-primary">Update Project</button>
	</form>
	
	<br>

	<form action="/projects/{{ $project->id }}" method="POST">
		@method('DELETE')
		@csrf
		<div class="">
			<button type="submit" class="btn btn-danger">Delete Project </button>
		</div>
	</form>
@endsection