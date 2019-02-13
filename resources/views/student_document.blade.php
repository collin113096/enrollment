<div class="card collapse" id="card3">
	<div class="card-header">
		Documents
	</div>
	<div class="card-body text-secondary pt-5">
		<ul class="list-group list-group-flush">
			@forelse($student->documents as $document)
				<li class="list-group-item list-group-item-action text-truncate" data-target="#document-{{ $loop->iteration }}" data-toggle="modal"><i class="fas fa-file-image mx-3"></i> {{ $document->document_type }}</li>
			@empty
				<div class="alert alert-info">
					No Documents Found
				</div>
			@endforelse
		</ul>

		<div class="d-flex justify-content-between mt-5">
			<div class="btn btn-light" id="card3-button"><i class="fas fa-arrow-left mx-2"></i> Back</div>
			@component('component.edit.form')
				@slot('url')
				/applicants/{{ $student->id }}
				@endslot

				@slot('title')
				@endslot

				@section('form_body')
				<button class="btn btn-primary">Admit Applicant</button>
				@endsection
			@endcomponent			
		</div>

	</div>

</div>
