@extends('template')
@section('title','All Time')
@section('content')
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		Time
	</div>
	<div class="card-body">
		<a class="btn btn-success mb-3" href="/times/create">
			<i class="fas fa-plus-circle"></i> Add</a>
		<table class="table">
			<thead>
				<tr>
					<th>Time In</th>
					<th>Time Out</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($times as $time)
				<tr>
					<td>{{ $time->in }}</td>
					<td>{{ $time->out }}</td>
					<td>
						<div class="text-center">
							<a class="btn btn-warning" href="/times/{{ $time->id }}/edit">
								<i class="fas fa-pen"></i> Edit</a>
							<form class="m-0 d-inline" method="post" action="/times/{{ $time->id }}">
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