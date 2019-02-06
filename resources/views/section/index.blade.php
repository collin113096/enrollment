@extends('main')
@section('title','All Sections')
@section('card_header','All Sections')

@section('add_button')
@add
	@slot('href')
		href="/sections/create"
	@endslot
@endadd
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
		@edit
			@slot('href')
				href="/sections/{{ $section->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/sections/{{ $section->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $sections->links() }}
@endsection

