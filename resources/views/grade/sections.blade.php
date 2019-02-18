@extends('registrar.template')
@section('title','All Grade')
@section('body_width')
<div class="col-md-9">
@endsection
@section('body')
<div class="card mb-3">
	<div class="card-header h5 text-white p-4 bg-dark">
		<strong class="text-uppercase">{{ $grade->name }} - Section List</strong>
	</div>
	<div class="card-body">
		<div class="row">
			@foreach($grade->sections as $section)
			<div class="col-md-4 mb-4">
				<div class="card text-center border border-primary">
					<div class="card-body">
						<div class="py-3">
							<h3 class="text-uppercase"><strong>{{ $section->name }}</strong></h3>
						</div>
						<div>
							<h3><a href="/grade/{{ $section->grade->id }}/section/{{ $section->id }}/students">{{ $section->registers->count() }} Students</a></h3>
						</div>
					<!-- END OF CARD BODY -->
					</div>
					<div class="card-footer">
							<label for="">Section Adviser:</label>
							<h6><a href="">
								@if($section->teachers->count())
								{{ $section->teachers->first()->last_name }}, 
								{{ $section->teachers->first()->first_name }}
								{{ $section->teachers->first()->middle_name }}
								@else
									No Adviser
								@endif
							</a></h6>
						</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
