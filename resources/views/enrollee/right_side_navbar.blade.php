@section('right_side_navbar')
<!-- 1ST LIST ITEM -->

@can('enroll','App\User')
<li class="nav-item">
	<a class="btn btn-primary" href="/application_form" class="nav-link">
		Enroll Now
	</a>
</li>
@endcan

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

@php
$id = auth()->id();
@endphp

<!-- 2ND LIST ITEM -->
@can('viewSubjects','App\User')
<li class="nav-item">
	<a href="/users/{{ $id }}/subjects" class="nav-link">
		My Subjects
	</a>
</li>
@endcan

<li class="nav-item">
	<a href="/admitted/applicants" class="nav-link">
		Notifications
		<span class="badge badge-primary">
			23
		</span>
	</a>
</li>

@endsection
