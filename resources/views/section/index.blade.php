@extends('main')
@section('title','All Sections')
@section('card_header','All Sections')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/sections/create"
	@endslot
@endcomponent
@endsection

@section('table_head')
	<th>Section Name</th>
	<th>Grade</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($sections as $section)
	<tr>
		<td>{{ $section->name }}</td>
		<td>{{ $section->grade->name }}</td>
		<td class="text-center">
		@component('edit_button')
			@slot('href')
				href="/sections/{{ $section->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/sections/{{ $section->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $sections->links() }}
@endsection

