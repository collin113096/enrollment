@extends('template')
@section('title','Edit Subject')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/subjects/{{ $subject->id }}">
@csrf
@method('PATCH')
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Edit Subject
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">
		<div class="form-group">
			<label>Subject Name</label>
			<input class="form-control" type="text" name="name" value="{{ $subject->name }}">
		</div>
		<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection