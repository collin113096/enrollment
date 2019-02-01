@extends('template')
@section('title','Assign Adviser')
@section('content')
<!-- FORM -->
<div class="col-md-8">

<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Assign adviser for <strong>{{ $section->name }}</strong> section
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
				<tr>
					<td>
						{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}
					</td>
					<td class="text-center">
						<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}/assign/{{ $teacher->id }}">
							@csrf
							<button class="btn btn-success" type="submit">Assign Adviser</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		

	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>

{{ $teachers->links() }}

<!-- END OF FORM -->
</div>
@endsection