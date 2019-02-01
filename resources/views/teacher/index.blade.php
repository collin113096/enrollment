@extends('template')
@section('title','All Teacher')
@section('content')
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		Teacher
	</div>
	<div class="card-body">
		<a class="btn btn-success mb-3" href="/teachers/create">
			<i class="fas fa-plus-circle"></i> Add</a>
		<table class="table">
			<thead>
				<tr>
					<th>Teacher Name</th>
					<th>Classification</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teacher)
				<tr>
					<td>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</td>
					<td>{{ $teacher->classification }}</td>
					<td>
						<div class="text-center">
							<a class="btn btn-warning" href="/teachers/{{ $teacher->id }}">
								<i class="fas fa-eye"></i> View</a>
							<form class="m-0 d-inline" method="post" action="/teachers/{{ $teacher->id }}">
								@csrf 
								@method('DELETE')
								<button class="btn btn-danger" type="submit">
								<i class="fas fa-minus-circle"></i> Delete</button>
							</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection