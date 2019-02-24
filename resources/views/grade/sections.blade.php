@extends('registrar.template')

@section('title')
{{ $grade->name }} - Section List
@endsection

@section('body')
<style>
	@media screen and (min-width: 576px)
	{
		.individual-document .modal-dialog 
		{
		    max-width: 800px;
		    margin: 1.75rem auto;
		}
	}
</style>
<div class="card mb-3">

	<div class="card-header h5 text-white p-4 bg-dark">
		<strong class="text-uppercase">{{ $grade->name }} - Section List</strong>
	</div>

	<div class="card-body">
		<div class="row">
			@foreach($grade->sections as $gradeSection)

				@component('grade.component.section',['section' => $gradeSection, 'loop' => $loop])
				@endcomponent

				@component('grade.component.adviser',['adviser' => $gradeSection->teachers->first(), 'loop' => $loop, 'section' => $gradeSection])
				@endcomponent

			
			@endforeach
		</div>
	</div>

</div>


<!-- BREAK -->

<div class="card mb-3">
	<div class="card-header h5 text-white p-4 bg-dark">
		@if(isset($section))
		<strong class="text-uppercase">{{ $section->name }} - Student List</strong>
		@else
		<strong class="text-uppercase">No section selected</strong>
		@endif
	</div>
	<div class="card-body">
		<div class="row justify-content-center">
			@if(isset($section))
			@if($section->haveNoStudents())
			<p>No Students associated with this section.</p>
			@else
			@foreach($section->students as $student)
				@component('section.component.students',['student' => $student])
				@endcomponent
				
				<!-- PERSONAL INFO -->
				<div class="modal fade" id="personal-info{{ $student->id }}">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<strong>Personal Information</strong>
							</div>
							<div class="modal-body">
								@php $url = $student->documents->where('document_type','Picture')->first()->url ?? false; @endphp
								<div class="form-group py-5">
									<div class="text-center">
										<img class="w-50 rounded-circle" src='{{ asset("storage/$url") }}'>
									</div>
								</div>
								<table class="table">
									<tbody>
										<tr class="bg-dark text-white">
											<td><strong>Name</strong></td>
											<td>{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</td>
										</tr>
										<tr>
											<td><strong>Home Address</strong></td>
											<td>{{ $student->home_address }}</td>
										</tr>
										<tr>
											<td><strong>Age</strong></td>
											<td>{{ date('Y') - date('Y', strtotime($student->birth_date)) }}</td>
										</tr>
										<tr>
											<td><strong>Birth Date</strong></td>
											<td>{{ date('M j, Y', strtotime($student->birth_date)) }}</td>
										</tr>
										<tr>
											<td><strong>Birth Place</strong></td>
											<td>{{ $student->birth_place }}</td>
										</tr>
										<tr>
											<td><strong>Religion</strong></td>
											<td>{{ $student->religion }}</td>
										</tr>
										<tr>
											<td><strong>Gender</strong></td>
											<td>{{ $student->gender }}</td>
										</tr>
										<tr>
											<td><strong>Grade</strong></td>
											<td>{{ $student->grade->name }}</td>
										</tr>
										<tr>
											<td><strong>Date Registered</strong></td>
											<td>{{ date('M d, Y', strtotime($student->registers->first()->created_at)) }}</td>
										</tr>
										<tr>
											<td><strong>Grade</strong></td>
											<td>{{ $student->grade->name }}</td>
										</tr>
										<tr class="bg-dark text-white">
											<td><strong>Father' Name</strong></td>
											<td>{{ $student->father->name }}</td>
										</tr>
										<tr>
											<td><strong>Occupation</strong></td>
											<td>{{ $student->father->occupation }}</td>
										</tr>
										<tr>
											<td><strong>Contact</strong></td>
											<td>{{ $student->father->contact }}</td>
										</tr>
										<tr class="bg-dark text-white">
											<td><strong>Mother' Name</strong></td>
											<td>{{ $student->mother->name }}</td>
										</tr>
										<tr>
											<td><strong>Occupation</strong></td>
											<td>{{ $student->mother->occupation }}</td>
										</tr>
										<tr>
											<td><strong>Contact</strong></td>
											<td>{{ $student->mother->contact }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- DOCUMENT -->
				<div class="modal fade" id="documents{{ $student->id }}">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<strong>Documents</strong>
							</div>
							<div class="modal-body">								
								<div class="list-group">
									@foreach($student->documents as $document)
										<li class="list-group-item list-group-item-action" data-toggle="modal" data-target="#document{{ $document->id }}">{{ $document->document_type }}</li>
									@endforeach
								</div>								
							</div>
						</div>
					</div>
				</div>

				@foreach($student->documents as $document)
					<div class="modal fade individual-document" id="document{{ $document->id }}">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<strong>{{ $document->document_type }}</strong>
								</div>
								@php $url = $document->url; @endphp
								<div class="modal-body">
									<img class="w-100" src='{{ asset("storage/$url") }}'>
								</div>
							</div>
						</div>
					</div>
				@endforeach

				<!-- GRADES -->
				<div class="modal fade" id="grades{{ $student->id }}">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<strong>Grades</strong>
							</div>
							<div class="modal-body">
								{{ $student->id }}
							</div>
						</div>
					</div>
				</div>
			@endforeach
			@endif
			@else
			<p>Choose section to view the students.</p>
			@endif
		</div>
	</div>
</div>
@endsection
