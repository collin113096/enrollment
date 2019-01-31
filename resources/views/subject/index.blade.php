@extends('template')
@section('title','All Subject')
@section('content')
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		Subject
	</div>
	<div class="card-body">
		<a class="btn btn-success mb-3" href="/subjects/create">
			<i class="fas fa-plus-circle"></i> Add</a>
		<table class="table">
			<thead>
				<tr>
					<th>Subject Name</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
				<tr>
					<td>{{ $subject->name }}</td>
					<td>
						<div class="text-center">
							<a class="btn btn-warning" href="/subjects/{{ $subject->id }}/edit">
								<i class="fas fa-pen"></i> Edit</a>
							<form class="m-0 d-inline" method="post" action="/subjects/{{ $subject->id }}">
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