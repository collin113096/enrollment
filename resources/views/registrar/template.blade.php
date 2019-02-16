@extends('layouts.app')
@section('title','Registrar')
<style>
	.dropdown-menu a {
    color: #777;
}
</style>
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<div class="card">
				<div class="card-header text-center h4 p-4">
					<strong>Grade</strong>
				</div>
				<div class="card-body">
					<div class="list-group list-group-flush">
						@foreach($grades as $grade)
						<a href="" class="list-group-item list-group-item-action d-flex justify-content-between">
						<span>{{ $grade->name }}</span>
						<span class="">{{ $grade->countStudent() }}</span>
						</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10">
			@section('body')
				@include('registrar.default')
			@show
		</div>	
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')