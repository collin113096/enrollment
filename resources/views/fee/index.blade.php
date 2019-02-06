@extends('main')
@section('title','All Fees')
@section('card_header','All Fees')

@section('add_button')
@add
	@slot('href')
		href="/fees/create"
	@endslot
@endadd
@endsection

@section('table_head')
	<th>Grade</th>
	<th>Payment Mode</th>
	<th>Registration</th>
	<th>Tuition</th>
	<th>Misc</th>
	<th>Computer</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($fees as $fee)
	<tr>
		<td>{{ $fee->grade->name }}</td>
		<td>{{ $fee->payment_mode }}</td>
		<td>{{ $fee->registration }}</td>
		<td>{{ $fee->tuition }}</td>
		<td>{{ $fee->misc }}</td>
		<td>{{ $fee->computer }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/fees/{{ $fee->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/fees/{{ $fee->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $fees->links() }}
@endsection
