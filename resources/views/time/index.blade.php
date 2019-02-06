@extends('main')
@section('title','All Times')
@section('card_header','All Times')

@section('add_button')
@add
	@slot('href')
		href="/times/create"
	@endslot
@endadd
@endsection

@section('table_head')
	<th>Time In</th>
	<th>Time Out</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($times as $time)
	<tr>
		<td>{{ date('h:i A', strtotime($time->in)) }}</td>
		<td>{{ date('h:i A', strtotime($time->out)) }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/times/{{ $time->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/times/{{ $time->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $times->links() }}
@endsection
