@extends('main')
@section('title','All Grade')
@section('card_header','All Grade')

@section('add_button')
@add
	@slot('href')
		href="/grades/create"
	@endslot
@endadd
@endsection

@section('table_head')
	<th>Grade Name</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($grades as $grade)
	<tr>
		<td>{{ $grade->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/grades/{{ $grade->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/grades/{{ $grade->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $grades->links() }}
@endsection

