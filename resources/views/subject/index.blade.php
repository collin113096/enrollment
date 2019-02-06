@extends('main')
@section('title','All Subject')
@section('card_header','All Subject')

@section('add_button')
@add
	@slot('href')
		href="/subjects/create"
	@endslot
@endadd
@endsection

@section('table_head')
	<th>Subject Name</th>
	<th>Description</th>
	<th>Unit(s)</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($subjects as $subject)
	<tr>
		<td>{{ $subject->name }}</td>
		<td>{{ $subject->description }}</td>
		<td>{{ $subject->unit }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/subjects/{{ $subject->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/subjects/{{ $subject->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $subjects->links() }}
@endsection
