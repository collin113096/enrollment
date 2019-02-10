@extends('registrar.template')
@section('title','Create Time')
@section('body')
@component('component.create.form')

@slot('url')
/times
@endslot

@slot('title')
Create Time
@endslot

@time
	@slot('label')
	Time In
	@endslot

	@slot('name')
	in
	@endslot

	@slot('value')
	@endslot
@endtime

@time
	@slot('label')
	Time Out
	@endslot

	@slot('name')
	out
	@endslot

	@slot('value')
	@endslot
@endtime

@action
/times
@endaction

@endcomponent
@endsection