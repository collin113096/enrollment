@extends('main')
@section('title','All Times')
@section('card_header','All Times')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/times/create"
	@endslot
@endcomponent
@endsection

@section('table_head')
	<th>Time In</th>
	<th>Time Out</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($times as $time)
	<tr>
		<td>{{ $time->in }}</td>
		<td>{{ $time->out }}</td>
		<td class="text-center">
		@component('edit_button')
			@slot('href')
				href="/times/{{ $time->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/times/{{ $time->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $times->links() }}
@endsection
