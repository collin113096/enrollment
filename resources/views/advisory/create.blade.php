@extends('main')
@section('title','Assign Adviser')

<!-- CARD HEADER -->
@section('card_header')
	Assign adviser for <strong>{{ $section->name }}</strong> section
@endsection

<!-- TABLE HEAD -->
@section('table_head')
	<th>Teacher</th>
	<th class="text-center">Action</th>
@endsection

<!-- TABLE BODY -->
@section('table_body')
	@foreach($teachers as $teacher)
		<tr>
			<td>
				{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}
			</td>
			<td class="text-center">
				<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}/assign/{{ $teacher->id }}">
					@csrf
					<button class="btn btn-success" type="submit">Assign Adviser</button>
				</form>
			</td>
		</tr>
	@endforeach
@endsection
	
@section('pagination')
	{{ $teachers->links() }}
@endsection
