@extends('template')
@section('title','All Section')
@section('content')
<!-- COLUMN -->
<div class="col-md-8">

<!-- CARD -->
<div class="card">

	<!-- CARD HEADER -->
	<div class="card-header">
		Section
	</div>

	<!-- CARD BODY -->
	<div class="card-body">

		<!-- ADD BUTTON -->
		<a class="btn btn-success mb-3" href="/sections/create">
			<i class="fas fa-plus-circle"></i> Add</a>

		<!-- TABLE -->
		<table class="table">

			<!-- TABLE HEAD -->
			<thead>
				<tr>
					<th>Section Name</th>
					<th>Grade</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>

			<!-- TABLE BODY -->
			<tbody>
				@foreach($sections as $section)
				<tr>
					<td>{{ $section->name }}</td>
					<td>{{ $section->grade->name }}</td>
					<td>
						<!-- ACTIONS -->
						<div class="text-center">

							<!-- EDIT -->
							<a class="btn btn-primary" href="/sections/{{ $section->id }}/edit">
								<i class="fas fa-pen"></i> Edit</a>

							<!-- DELETE -->
							<form class="m-0 d-inline" method="post" action="/sections/{{ $section->id }}">
								@csrf 
								@method('DELETE')
								<button class="btn btn-danger" type="submit">
									<i class="fas fa-minus-circle"></i> Delete</button>
							</form>

						<!-- END OF ACTION -->
						</div>
					</td>
				</tr>
				@endforeach

			<!-- END OF TABLE BODY -->
			</tbody>

		<!-- END OF TABLE -->
		</table>

	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF COLUMN -->
</div>
@endsection