@extends('registrar.template')
@section('title','All Fees')
@section('body')
@component('component.card')

@slot('title')
All Fees
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/fees/create"
	@endslot
@endadd
@endslot

@section('column_width')
<div class="col-md-10">
@endsection

@slot('head')
	<th>Grade</th>
	<th>Payment Mode</th>
	<th>Registration</th>
	<th>Tuition</th>
	<th>Misc</th>
	<th>Computer</th>
	<th>Internet</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($fees as $fee)
	<tr>
		<td>{{ $fee->grade->name }}</td>
		<td>{{ $fee->payment_mode }}</td>
		<td>{{ $fee->registration }}</td>
		<td>{{ $fee->tuition }}</td>
		<td>{{ $fee->misc }}</td>
		<td>{{ $fee->computer }}</td>
		<td>{{ $fee->internet }}</td>
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
@endslot

@slot('pagination')
{{ $fees->links() }}
@endslot

@endcomponent
@endsection