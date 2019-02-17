@section('right_side_navbar')
<!-- 1ST LIST ITEM -->

@inject('student','App\Student')
@inject('register','App\Register')
@inject('suggestion', 'App\Suggestion');

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

<li class="nav-item dropdown">
	<a href="/applicants" class="nav-link dropdown-toggle" data-toggle="dropdown">
		Suggestion
		<span class="badge badge-primary">
			{{ $suggestion->count() }}
		</span>
	</a>
	<div class="dropdown-menu" style="height:400px;overflow-y:scroll">
		@foreach($suggestion->all() as $suggestion)
			<a class="dropdown-item" style="{{ $suggestion->seen ? '':'background:#e5eaf2;' }}" href="" data-toggle="modal" data-target="#modal{{ $suggestion->id }}"">
			<div class="" style="font-size:1.2em;"><strong>{{ $suggestion->name }}</strong> make a suggestion</div>
			<div>Submitted on <span class="text-dark font-sw">{{ date('M d,Y',strtotime($suggestion->created_at)) }}</span></div>
			</a>
		@endforeach
	</div>
</li>

@foreach($suggestion->all() as $suggestion)
<div class="modal fade" id="modal{{ $suggestion->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Suggestion</h3>
			</div>
			<div class="modal-body">
				<div class="">From: <strong>{{ $suggestion->name }}</strong></div>
				<hr>
				<div clas="">Date Submitted: {{ date('M d,Y',strtotime($suggestion->created_at)) }}</div>
				<hr>
				<div class="">Contact: {{ $suggestion->contact }}</div>
				<hr>
				<p class="p-5">{{ $suggestion->suggestion }}</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- 4TH LIST ITEM -->
<li class="nav-item dropdown" id="management">

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
