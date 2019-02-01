@extends('template')
@section('title','All Section')
@section('content')
<!-- COLUMN -->
<div class="col-md-10">

<!-- CARD -->
<div class="card">

	<!-- CARD HEADER -->
	<div class="card-header">
		Section
	</div>

	<!-- CARD BODY -->
	<div class="card-body">

		<!-- TABLE -->
		<table class="table">

			<!-- TABLE HEAD -->
			<thead>
				<tr>
					<th>Section Name</th>
					<th>Adviser</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>

			<!-- TABLE BODY -->
			<tbody>
				@foreach($sections as $section)
				<tr>
					<td>{{ $section->name }}</td>
					<td>
					@php 
						if(count($section->teachers) == 0)
						{
							echo "???";
						}
						else
						{
							$adviser = $section->teachers()->first();
							echo $adviser->last_name.", ".$adviser->first_name." ".$adviser->middle_name;
						}
					@endphp
					</td>

					<!-- ACTIONS -->
					<td>	

						
						<div class="text-center">

							<!-- ASSIGN ADVISER -->
							<a class="btn btn-warning" href="/advisory/{{ $section->id }}/create">
								<i class="fas fa-pen"></i> Assign Adviser
							</a>
							
							<!-- EDIT ADVISER -->
							<a class="btn btn-primary" href="/advisory/{{ $section->id }}/edit">
								<i class="fas fa-pen"></i> Change Adviser
							</a>

							<!-- DELETE ADVISER -->
							<a class="btn btn-danger" href="/sections/{{ $section->id }}/delete/">
								<i class="fas fa-trash"></i> Delete Adviser
							</a>
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