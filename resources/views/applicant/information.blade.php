@extends('registrar.index')
@section('title','Applicant Documents')
@section('registrar_content')
@include('information_style')
<div class="row">
	<div class="col-md-12">
		@include('student_information')
		@include('parent_information')
		@include('student_document')
	</div>

	@modal(['documents' => $student->documents])
	@endmodal
</div>

<script src="{{ asset('js/application_form_next_and_back.js') }}"></script>
@endsection