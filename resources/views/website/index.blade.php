@extends('website.template')
@section('main')
<main>
@endsection
@include('website.style')
@section('body')
<!-- CAROUSEL -->
<div id="carouselSample" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		
		<div class="carousel-item active">
			<img class="w-100" src="{{ asset('images/facility/banner.JPG') }}">
		</div>
		
	</div>

	<a class="carousel-control-prev" href="#carouselSample" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#carouselSample" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>	

<!-- MISSION STATEMENT -->
<div class="text-justify text-dark">
<div class="container">
	<div class="row">
		<div class="col-md-6 py-5 h5">
			<h3 class="py-3 font-weight-bold h1">Mission Statement</h3>
			<p>Pagsanjan Academy which was founded in 1923 is committed to foster quality education to the youth of the community of Pagsanjan and its vicinities. It is a non-sectarian school for boys and girls which aims to give them a round, complete and general education and thus promote their intellectual and moral development.</p>
			<p>It seeks to provide opportunity for all students to foster the development of future citizens within the frameworks of the Department of Education which focuses Values Education for all students and creates a balance between sciences and humanities guided by faith in God.</p>
			<button class="btn btn-primary btn-lg mt-3">Enroll Now !</button>
		</div>
		<div class="col-md-6 d-flex align-items-center justify-content-center">
			<img class="w-50" src="{{ asset('images/facility/student.PNG') }}">
		</div>
	</div>
</div>
</div>

<div class="bg-warning divider" style="min-height:100px"></div>

<!-- GENERAL OBJECTIVES -->
<div class="bg-warning pt-5 text-justify text-dark">
<div class="container">
	<div class="row">
		<div class="col-md-6 d-flex align-items-center justify-content-center">
			<img class="w-50" src="{{ asset('images/facility/general_objectives.PNG') }}">
		</div>
		<div class="col-md-6 py-5 h5">
			<h3 class="py-3 font-weight-bold h1">General Objectives</h3>
			<p>To develop the specific potentials of each individual the moral, spiritual, cultural, socio-civic and physical aspects of his personality, for him and his society’s benefits.</p>
			<p>To develop in the individual the sense of belonging to a national community; and</p>
			<p>To develop intellectual and work skills in the individual with greater focus on the values that he must develop for the meaningful utilization of such skills.</p>
		</div>
	</div>
</div>
</div>

<div class="divider2" style="min-height:100px"></div>

<!-- SPECIFIC OBJECTIVES -->
<div class="text-justify text-dark">
<div class="container">
	<div class="row">
		<div class="col-md-6 py-5 h5">
			<h3 class="py-3 font-weight-bold h1 text-center">7 Specific Objectives</h3>
			<ol>
				<li class="my-4">Who is committed to God and to truth, peace and justice;</li>
				<li class="my-4">Who can think effectively, communicate thought accurately and judge rightly through an adequate program of general education;</li>
				<li class="my-4">Who has acquired a sense of values through a well-integrated program of moral and religious training;</p>
				<li class="my-4">Who knows his capabilities, interests and aptitudes so that he will be able to choose the vocation in which he can best serve people;</li>
				<li class="my-4">Who is aware not only of man’s cultural heritage in general but also of his own heritage as a Filipino and who is ecologically conscious;</li>
				<li class="my-4">Who is socially responsible, realizing that society depends upon his individual contributions for its progress and development;</li>
				<li class="my-4">Who is protector of the natural environment.</li>
			</ol>
		</div>
		<div class="col-md-6 d-flex align-items-center justify-content-center">
			<img class="w-100" src="{{ asset('images/facility/specific_objectives.PNG') }}">
		</div>
	</div>
</div>
</div>

<!-- NEWS AND EVENTS -->
<div class="py-5 text-justify text-dark">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center mb-5 border-bottom pb-3">News and Events</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="card-img-top">
					<img class="w-100" src="{{ asset('images/facility/arch.jpg') }}" alt="">
				</div>
				<div class="card-body">
					<div class="card-title"><strong>Rizal Day</strong></div>
					<p style="height:120px; overflow:hidden;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sequi, in distinctio. Repudiandae quas saepe quis, at nobis tempore reprehenderit corrupti cumque quidem sapiente corporis nisi ipsa iure repellat ex.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sequi, in distinctio. Repudiandae quas saepe quis, at nobis tempore reprehenderit corrupti cumque quidem sapiente corporis nisi ipsa iure repellat ex.
					</p>
					<button class="btn btn-primary mt-3">Learn More</button>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="card-img-top">
					<img class="w-100" src="{{ asset('images/facility/arch.jpg') }}" alt="">
				</div>
				<div class="card-body">
					<div class="card-title"><strong>Bonifacio Day</strong></div>
					<p style="height:120px; overflow:hidden;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sequi, in distinctio. Repudiandae quas saepe quis, at nobis tempore reprehenderit corrupti cumque quidem sapiente corporis nisi ipsa iure repellat ex.</p>
					<button class="btn btn-primary mt-3">Learn More</button>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="card-img-top">
					<img class="w-100" src="{{ asset('images/facility/arch.jpg') }}" alt="">
				</div>
				<div class="card-body">
					<div class="card-title"><strong>Chinese New Year</strong></div>
					<p style="height:120px; overflow:hidden;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sequi, in distinctio. Repudiandae quas saepe quis, at nobis tempore reprehenderit corrupti cumque quidem sapiente corporis nisi ipsa iure repellat ex.</p>
					<button class="btn btn-primary mt-3">Learn More</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- FOOTER -->
<div class="text-justify bg-dark text-white py-5">
<div class="container">
	<div class="row">
		<div class="col-md-7 mb-3">
			<h1>Location</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30929.995802578866!2d121.44658110140749!3d14.296932364592958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spagsanjan+academy!5e0!3m2!1sen!2sph!4v1549946794580" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-5">
			<h1 class="text-center">Suggestion Box</h1>
			<form method="post" action="/suggestions">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input class="form-control" type="number" name="contact">
				</div>
				<div class="form-group">
					<label>Suggestion or Concern</label>
					<textarea class="form-control" name="suggestion" id="" cols="30" rows="10"></textarea>
				</div>
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
		</div>
	</div>
</div>
</div>


@endsection