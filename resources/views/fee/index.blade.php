@extends('main')
@section('title','All Fees')
@section('card_header','All Fees')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/fees/create"
	@endslot
@endcomponent
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
		@component('edit_button')
			@slot('href')
				href="/fees/{{ $fee->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/fees/{{ $fee->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $fees->links() }}
@endsection
