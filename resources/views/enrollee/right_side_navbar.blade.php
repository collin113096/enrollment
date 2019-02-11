@section('right_side_navbar')
<!-- 1ST LIST ITEM -->
<li class="nav-item">
	<a class="btn btn-primary" href="/application_form" class="nav-link">
		Enroll Now
	</a>
</li>

<li class="nav-item dropdown">
	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
		Tuition Fee
	</a>
	<div class="dropdown-menu">
		@foreach($grades as $grade)
		<a class="dropdown-item" href="/fees/grade/{{ $grade->id }}">{{ $grade->name }}</a>
		@endforeach
	</div>
</li>

<!-- 2ND LIST ITEM -->
<li class="nav-item">
	<a href="/admitted/applicants" class="nav-link">
		My Subjects
	</a>
</li>

<li class="nav-item">
	<a href="/admitted/applicants" class="nav-link">
		Notifications
		<span class="badge badge-primary">
			23
		</span>
	</a>
</li>

@endsection