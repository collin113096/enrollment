@extends('main')
@section('title','All Subject')
@section('card_header','All Subject')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/subjects/create"
	@endslot
@endcomponent
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
		@component('edit_button')
			@slot('href')
				href="/subjects/{{ $subject->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/subjects/{{ $subject->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $subjects->links() }}
@endsection
