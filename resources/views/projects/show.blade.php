@extends('layout')

@section('content')
	<h1 class="title">{{ $project->title }}</h1>
	<div class="content">{{ $project->description }}</div>
	<p><a href="/projects/{{ $project->id }}/edit">Edit</a></p>
	@if ($project->tasks->count())
		<div>
			@foreach ($project->tasks as $task)
				<div>
					<form action="/completed-task/{{ $task->id }}" method="POST" class="form-group">		
						@if ($task->completed) 
							@method('DELETE')
						@endif
						
						@csrf
						<label for="">
							<input type="checkbox" name="completed" id="" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
							{{ $task->description }}
						</label>
					</form>
				</div>
			@endforeach 
		</div>
	@endif

	{{-- Add a new task form --}}
	<form action="/projects/{{ $project->id }}/tasks" method="POST" class="form-group">
		@csrf

		<label for="">New Task</label>

		<div>
			<input type="text" name="description" id="" placeholder="New Task" class="form-control">
		</div>

		<div>
			<button type="submit" class="btn btn-primary">Add Task</button>
		</div>
	</form>

	@include('errors')
@endsection