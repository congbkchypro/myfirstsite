@extends('layout')

@section('content')
	<h1>Create a Project</h1>

	<form action="/projects" method="POST">
		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="project title" class="form-control {{ $errors->has('title') ? 'bg-danger' : '' }}" value="{{ old('title') }}">
		</div>

		<div>
			<textarea name="description" id="" cols="30" rows="10" placeholder="Project description" class="form-control">{{ old('description') }}</textarea>
		</div>

		<div>
			<button type="submit" class="btn btn-primary">Create Project</button>
		</div>
		
		@include('errors')
	</form>
@endsection
