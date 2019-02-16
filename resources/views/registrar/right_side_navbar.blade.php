@section('right_side_navbar')
<!-- 1ST LIST ITEM -->

@inject('student','App\Student')
@inject('register','App\Register')

<li class="nav-item">
	<a href="/applicants" class="nav-link">
		Applicants
		<span class="badge badge-primary">
			{{ $student->countApplicants() }}
		</span>
	</a>
</li>

<!-- 2ND LIST ITEM -->
<li class="nav-item">
	<a href="/admitted/applicants" class="nav-link">
		Admitted
		<span class="badge badge-primary">
			{{ $student->countAdmitted() }}
		</span>
	</a>
</li>

<!-- 3RD LIST ITEM -->
<li class="nav-item">
	<a href="/registers" class="nav-link">
		Registered
		<span class="badge badge-primary">
			{{ $register->count() }}
		</span>
	</a>
</li>

<li class="nav-item">
	<a href="/applicants" class="nav-link">
		Suggestion
		<span class="badge badge-primary">
			{{ $student->countApplicants() }}
		</span>
	</a>
</li>

<!-- 4TH LIST ITEM -->
<li class="nav-item dropdown">

<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Management</a>

<div class="dropdown-menu">
	<a href="/advisory" class="dropdown-item">
		<i class="fas fa-chalkboard-teacher mr-4"></i>Advisory
	</a>
	<a href="/teachers" class="dropdown-item">
		<i class="fas fa-chalkboard-teacher mr-4"></i>Faculty
	</a>
	<a href="/subjects" class="dropdown-item">
		<i class="fas fa-book mr-4"></i>Subject
	</a>
	
	<a href="/sections" class="dropdown-item">
		<i class="fas fa-users mr-4"></i>Section
	</a>

	<div class="dropdown-divider"></div>

	<a href="/grades" class="dropdown-item">
		<i class="fas fa-clipboard mr-4"></i>Grade
	</a>
	<a href="/fees" class="dropdown-item">
		<i class="fas fa-money-bill-alt mr-4"></i>Fee
	</a>

	<div class="dropdown-divider"></div>

	<a href="/fees" class="dropdown-item">
		<i class="fas fa-print mr-4"></i>Print Student Report
	</a>

	<a href="/fees" class="dropdown-item">
		<i class="fas fa-print mr-4"></i>Print Enrollment Data
	</a>

	<a href="/fees" class="dropdown-item">
		<i class="fas fa-print mr-4"></i>Print Faculty
	</a>

	<div class="dropdown-divider"></div>

	<a href="/fees" class="dropdown-item">
		<i class="fas fa-download mr-4"></i>Export Database
	</a>
	<a href="/fees" class="dropdown-item">
		<i class="fas fa-upload mr-4"></i>Import Database
	</a>
</div>

</li>
@endsection
