@extends('layouts.app')
@section('title','Registrar')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@section('column_width')
		<div class="col-md-8">
		@show
			@yield('body')
		</div>
		
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')