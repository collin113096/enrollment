@extends('main')
@section('title','All Grade')
@section('card_header','All Grade')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/grades/create"
	@endslot
@endcomponent
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
		@component('edit_button')
			@slot('href')
				href="/grades/{{ $grade->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/grades/{{ $grade->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $grades->links() }}
@endsection

