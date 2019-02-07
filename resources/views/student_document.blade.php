<div class="card">
	<div class="card-header">
		Documents
	</div>
	<div class="card-body text-secondary">
		<ul class="list-group list-group-flush">
			@forelse($student->documents as $document)
				<li class="list-group-item text-truncate" data-target="#document-{{ $loop->iteration }}" data-toggle="modal"><i class="fas fa-file-image mx-3"></i> {{ $document->document_type }}</li>
			@empty
				<div class="alert alert-info">
					No Documents Found
				</div>
			@endforelse
		</ul>
	</div>
</div>
