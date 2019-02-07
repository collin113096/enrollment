@extends('template')
@section('title','Registrar')
@section('content')
@include('registrar_style')

<!-- MAIN COLUMN -->
<div class="col-md-12" id="main">

<!-- FIRST ROW -->
<div class="row">

	<!-- LOGO -->
	<div class="col-md-3">
		<img class="w-50 d-block mx-auto pt-4" src="{{ asset('images/pagsanjan-academy-logo.png') }}">
	</div>

	<!-- BANNER -->
	<div class="col-md-9">
		<div class="" style="background-image: url({{ asset('images/banner.jpg') }}); background-repeat: no-repeat;min-height:189">
		</div>
	</div>

<!-- END OF FIRST ROW -->
</div>

<!-- SECOND ROW -->
<div class="row">

<!-- NAVIGATION COLUMN -->
<div class="col-md-3">

<!-- MAVBAR COLLAPSE -->
<nav class="navbar navbar-expand-lg">
<button class="navbar-toggler mb-3" data-toggle="collapse" data-target="#navigation">
	<i class="fa fa-bars"></i>
</button>

<!-- NAVIGATION -->
<ul class="list-group list-group-flush font-weight-bold mb-5 collapse navbar-collapse" id="navigation">

	<!-- ADMISSION -->
	<a class="list-group-item list-group-item-action" href="/applicants"><i class="fas fa-user mr-4"></i>Applicants</a>

	<!-- REGISTER -->
	<a class="list-group-item list-group-item-action" href="/admitted/applicants">
		<i class="fas fa-user-check mr-4"></i>Admitted
	</a>

	<!-- REGISTRATION -->
	<a class="list-group-item list-group-item-action" href="/registers">
		<i class="fas fa-school mr-4"></i>Registered
	</a>

	<!-- CLASSES -->
	<a class="list-group-item list-group-item-action" href="/classes">
		<i class="fas fa-users mr-4"></i>Classes
	</a>

	<!-- ADVISORY -->
	<a class="list-group-item list-group-item-action" href="/advisory">
		<i class="fas fa-chalkboard-teacher mr-4"></i>Advisory
	</a>

	<!-- GRADE -->
	<a class="list-group-item list-group-item-action" href="/grades">
		<i class="fas fa-clipboard mr-4"></i> Grade
	</a>

	<!-- TIME -->
	<a class="list-group-item list-group-item-action" href="/times">
		<i class="fas fa-clock mr-4"></i>Time
	</a>

	<!-- SUBJECT -->
	<a class="list-group-item list-group-item-action" href="/subjects">
		<i class="fas fa-book mr-4"></i> Subject
	</a>

	<!-- ROOM -->
	<a class="list-group-item list-group-item-action" href="/rooms">
		<i class="fas fa-door-open mr-4"></i>Rooms
	</a>

	<!-- TEACHER -->
	<a class="list-group-item list-group-item-action" href="/teachers">
		<i class="fas fa-chalkboard-teacher mr-4"></i>Teacher
	</a>

	<!-- SECTION -->
	<a class="list-group-item list-group-item-action" href="/sections">
		<i class="fas fa-users mr-4"></i>Section
	</a>

	<!-- FEE -->
	<a class="list-group-item list-group-item-action" href="/fees">
		<i class="fas fa-money-bill-alt mr-4"></i>Fee
	</a>

<!-- END OF NAVIGATION -->
</ul>

<!-- NAVBAR COLLAPSE -->
</nav>

<!-- END OF NAVIGATION COLUMN -->
</div>

<!-- BODY COLUMN -->
<div class="col-md-9">

@section('registrar_content')
<!-- DEFAULT CARD -->
<div class="card">

	<!-- CARD HEADER -->
	<div class="card-header">
		Dashboard
	</div>

	<!-- CARD BODY -->
	<div class="card-body">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quos, similique dolorem dolor nemo rem totam earum incidunt, cum tempora nobis dicta et dignissimos in perferendis corporis, laboriosam natus voluptatum.
	</div>

<!-- END OF CARD BODY -->
</div>
@show

<!-- END OF BODY COLUMN -->
</div>

<!-- END OF SECOND ROW -->
</div>

<!-- END OF MAIN COLUMN -->
</div>

@endsection