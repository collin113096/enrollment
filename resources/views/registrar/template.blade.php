@extends('layouts.app')
@section('title','Registrar')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@yield('body')
		</div>
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')