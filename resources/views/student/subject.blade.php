@extends('enrollee.template')
@section('title','My Subjects')
@section('body')
<div class="card">
	<div class="card-header">
		Schedule of Classes
	</div>
	<div class="card-body">
		<table class="table table-borderless">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Time</th>
					<th>Room</th>
					<th>Teacher</th>
				</tr>
			</thead>
			<tbody>
				@foreach($classes as $class)
				<tr>
					<td>{{ $class->subject->name }}</td>
					<td>{{ date('h:m A', strtotime($class->time->in)) }} - {{ date('h:m A', strtotime($class->time->out)) }}</td>
					<td>{{ $class->room->name }}</td>
					<td>{{ $class->teacher->last_name }} {{ $class->teacher->first_name }} {{ $class->teacher->middle_name }}</td>
				</tr>
				@endforeach			
			</tbody>
		</table>
	</div>
</div>
@endsection