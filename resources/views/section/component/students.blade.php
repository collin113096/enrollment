<div class="col-md-5 mb-4">
	<div class="card">

		<div class="card-body">
			@php $url = $student->documents->where('document_type','Picture')->first()->url ?? false;
			@endphp
			<div class="row mb-1">

				<div class="col-md-4 d-flex align-items-center">
					@if(!$url)
					<img class="rounded-circle d-block mx-auto" src='{{ asset("images/user.jpg") }}' width="80px">
					@else
					<img class="rounded-circle d-block mx-auto" src='{{ asset("storage/$url") }}' width="80px">
					@endif
				</div>

				<div class="col-md-8">
					<div class="d-flex justify-content-between">
						<strong>{{ $student->registers->first()->student_lrn }}</strong>
					</div>
					<div class="mt-1 text-sm-center-custom">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</div>
				</div>
				
			</div>
		</div>

		<div class="card-footer">
				<button class="btn btn-sm badge-pill" data-toggle="modal" data-target="#personal-info{{ $student->id }}">Personal Info</button>
				<button class="btn btn-sm badge-pill" data-toggle="modal" data-target="#documents{{ $student->id }}">Documents</button>
				<button class="btn btn-sm badge-pill" data-toggle="modal" data-target="#grades{{ $student->id }}">Grades</button>
				<button class="btn btn-sm badge-pill mt-1" data-toggle="modal" data-target="#sms{{ $student->id }}">Send SMS</button>
		</div>

	</div>
</div>