@extends('registrar.template')
@section('title','Edit Time')
@section('body')
@component('component.edit.form')

@slot('url')
/times/{{ $time->id }}
@endslot

@slot('title')
Edit Time
@endslot

@time
	@slot('label')
	Time In
	@endslot

	@slot('name')
	in
	@endslot

	@slot('value')
	{{ $time->in }}
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
	{{ $time->out }}
	@endslot
@endtime

@action
	/times
@endaction

@endcomponent
@endsection