@extends('main')
@section('title','All Teachers')
@section('card_header','All Teachers')

@section('add_button')
@add
	@slot('href')
		href="/teachers/create"
	@endslot
@endadd
@endsection

@section('table_head')
	<th>Teacher Name</th>
	<th>Classification</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($teachers as $teacher)
	<tr>
		<td>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</td>
		<td>{{ $teacher->classification }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/teachers/{{ $teacher->id }}"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/teachers/{{ $teacher->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $teachers->links() }}
@endsection

