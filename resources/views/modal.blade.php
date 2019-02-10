@foreach($documents as $document)
<div class="modal fade" id="document-{{ $loop->iteration }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				{{ $document->document_type }}
			</div>
			<div class="modal-body">
				<div class="py-md-1">
					<img class="w-100" src='{{ asset("/storage/$document->url") }}' alt="">
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach