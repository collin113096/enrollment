@extends('layouts.app')
@section('title','Registrar')
<style>
	.dropdown-menu a {
    color: #777;
}
</style>
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@section('column_width')
		<div class="col-md-8">
		@show
			@section('body')
				@include('registrar.default')
			@show
		</div>	
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')