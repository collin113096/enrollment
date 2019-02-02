@extends('template')
@section('title','Change Adviser')
@section('content')
<!-- FORM -->
<div class="col-md-8">

<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Change adviser for <strong>{{ $section->name }}</strong> section
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>Teacher</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teacher)
				@if($section->teachers()->first()->id == $teacher->id)
				<tr>
					<td>
						<label class="col-form-label">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</label>		
						<span class="badge badge-primary">Current Adviser</span>
					</td>
					<td class="text-center">					
							<button class="btn btn-success disabled" disabled="">Assign Adviser</button>
					</td>
				</tr>
				@else
				<tr>
					<td>
						<label class="col-form-label">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</label>			
					</td>
					<td class="text-center">
						<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}/assign/{{ $teacher->id }}">
							@csrf
							@method('PATCH')
							<button class="btn btn-success" type="submit">Assign Adviser</button>
						</form>
					</td>
				</tr>

				@endif
				@endforeach
			</tbody>
		</table>
		

	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>

<div class="d-flex mt-3">
	{{ $teachers->links() }}
</div>

<!-- END OF FORM -->
</div>
@endsection