@extends('template')
@section('title','Applicant Documents')
@section('content')
<div class="col-md-3">
	<div class="card">
		<div class="card-body">
			<div class="list-group list-group-flush">
				@foreach($student->documents as $document)
				<a id="document-{{ $loop->iteration }}" class="list-group-item list-group-item-action">{{ $document->document_type }}</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<a class="h1 text-center d-block text-primary" href="" title="View Applicant Form">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</a>

			
			@foreach($student->documents as $document)
			<div class="py-md-1" id="document-{{ $loop->iteration }}-image">
				<span class="text-center h5 d-block text-secondary">
					{{ $document->document_type }}
				</span>		
				<img class="w-100 img-thumbnail" src='{{ asset("/storage/$document->url") }}' alt="">
			</div>
			@endforeach

		</div>
	</div>
</div>
<script>
	hideAllDocuments();
	showOnly('document-1-image');

	$('[id*="document"').click(function(){
		hideAllDocuments();
		showOnly(this);
		
	});

	function hideAllDocuments(){
		$('[id*="-image"').hide();
	}

	function showOnly(element){
		if(typeof Object){
			$('#' + element.id + '-image').show();
		}else{
			$('#' + 'document-1' + '-image').show();
		}
	}
</script>
@endsection