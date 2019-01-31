@extends('template')
@section('title','Edit Section')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/sections/{{ $section->id }}">
@csrf
@method('PATCH')
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Edit Section
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">
		<div class="form-group">
			<label>Section Name</label>
			<input class="form-control" type="text" name="name" value="{{ $section->name }}">
		</div>
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/sections">Cancel</a>
			<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection