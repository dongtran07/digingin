@extends('layouts.master')

@section('content')

	<div class="col-md-6">
	<h1>All Task</h1>
	<ul class="list-group">
	@foreach($tasks as $task)
		<li class="list-group-item">
			<a href="{{Asset($task->user->username)}}/tasks"><img src="{{gravatar_url($task->user->email)}}" alt="{{$task->user->email}}"></a>
			{{link_to_task($task)}}
		</li>
	@endforeach
	</ul>
	</div>
	@if(isset($users))
	<div class="col-md-6">
	<h3>Add New Task</h3>
	@include('tasks/partials/_form')
	</div>
	@endif
@stop