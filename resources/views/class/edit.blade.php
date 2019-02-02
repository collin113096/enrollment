@extends('template')
@section('title','Edit Room')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/rooms/{{ $room->id }}">
@csrf
@method('PATCH')
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Edit Room
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">
		<div class="form-group">
			<label><strong>Room Name</strong></label>
			<input class="form-control" type="text" name="name" value="{{ $room->name }}">
		</div>
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/rooms">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection