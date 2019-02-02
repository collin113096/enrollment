@extends('index_template')
@section('title','All Time')
@section('card-header','Time')
	
@section('add-button')
<a class="btn btn-success mb-3" href="/times/create">
<i class="fas fa-plus-circle"></i> Add</a>
@endsection

@section('table-head')
<th>Time In</th>
<th>Time Out</th>
<th class="text-center">Action</th>
@endsection

@section('table-body')
@foreach($times as $time)
<tr>
	<td>{{ $time->in }}</td>
	<td>{{ $time->out }}</td>
	<td>
		<div class="text-center">
			<a class="btn btn-primary" href="/times/{{ $time->id }}/edit">
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
@endsection
