@extends('template')
@section('title','All Section')
@section('content')
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		Section
	</div>
	<div class="card-body">
		<a class="btn btn-success mb-3" href="/sections/create">
			<i class="fas fa-plus-circle"></i> Add</a>
		<table class="table">
			<thead>
				<tr>
					<th>Section Name</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sections as $section)
				<tr>
					<td>{{ $section->name }}</td>
					<td>
						<div class="text-center">
							<a class="btn btn-warning" href="/sections/{{ $section->id }}/edit">
								<i class="fas fa-pen"></i> Edit</a>
							<form class="m-0 d-inline" method="post" action="/sections/{{ $section->id }}">
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