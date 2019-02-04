@extends('template')
@section('title','Registrar')
@section('content')
<style>
div#main {
    border-top: 10px solid #252a62;
    background: white;
}

a.list-group-item.list-group-item-action:hover {
    border-left: 3px solid #252a62;
}
</style>
<div class="col-md-12" id="main">
<div class="row">
	<div class="col-md-3">
		<img class="w-50 d-block mx-auto pt-4" src="{{ asset('images/pagsanjan-academy-logo.png') }}">
	</div>
	<div class="col-md-9">
		<div class="" style="background-image: url({{ asset('images/banner.jpg') }}); background-repeat: no-repeat;min-height:189">
		
		</div>
	</div>
</div>
<div class="row">
<div class="col-md-3">
<ul class="list-group">
	<a class="list-group-item list-group-item-action" href="">Time</a>
	<a class="list-group-item list-group-item-action" href="">Grade</a>
	<a class="list-group-item list-group-item-action" href="">Subject</a>
	<a class="list-group-item list-group-item-action" href="">Rooms</a>
	<a class="list-group-item list-group-item-action" href="">Teacher</a>
	<a class="list-group-item list-group-item-action" href="">Section</a>
	<a class="list-group-item list-group-item-action" href="">Advisory</a>
	<a class="list-group-item list-group-item-action" href="">Register</a>
	<a class="list-group-item list-group-item-action" href="">Fee</a>
	<a class="list-group-item list-group-item-action" href="">Classes</a>
	<a class="list-group-item list-group-item-action" href="">Application</a>
	<a class="list-group-item list-group-item-action" href="">Admission</a>
	<a class="list-group-item list-group-item-action" href="">Registration</a>
</ul>
</div>
<div class="col-md-9">
<div class="card">
	<div class="card-header">
		Dashboard
	</div>
	<div class="card-body">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quos, similique dolorem dolor nemo rem totam earum incidunt, cum tempora nobis dicta et dignissimos in perferendis corporis, laboriosam natus voluptatum.
	</div>
</div>
</div>
</div>
</div>

@endsection