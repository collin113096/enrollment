<div class="col-md-4 mb-4">

	<div class="card text-center border border-primary">

			<div class="card-body">
				<h3 class="text-uppercase py-3"><strong>{{ $section->name }}</strong></h3>
				<h3><a href="/grade/{{ $section->grade->id }}/section/{{ $section->id }}/students">{{ $section->registers->count() }} Students</a></h3>
			</div>

			<div class="card-footer">
				<label>Section Adviser:</label>
				<h6>
					<a href="#adviser-{{ $loop->iteration }}" data-toggle="modal">
					@if($section->teachers->count())
						{{ $section->teachers->first()->last_name }}, 
						{{ $section->teachers->first()->first_name }}
						{{ $section->teachers->first()->middle_name }}
					@else
						No Adviser
					@endif
					</a>
				</h6>
			</div>

	</div>
	
</div>
