@extends('layouts.app')
@section('title','Registrar')
@include('registrar.style')
@include('registrar.right_side_navbar')

@section('content')
<div class="container">

	<div class="row">

		<div class="col-md-3">
			@include('registrar.sidebar')
		</div>
			
		<div class="col-md-9">
			@section('body')
			@include('registrar.default')
			@show
		</div>	

	</div>

</div>
@endsection
