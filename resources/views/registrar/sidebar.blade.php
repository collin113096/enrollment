@inject('registers','App\Register')
<div class="card mb-3 shadow">

	<div class="card-header h5 pt-3 text-center">
		Grades
	</div>

	<div class="card-body">

		<div class="form-group text-center py-3">
			<label class="font-wi">School Year</label>
			<select class="custom-select" name="">
				<option value="2019">2019</option>
			</select>
			<a href=""><u>Statistics</u></a>
		</div>

		<div class="list-group list-group-flush">

			@foreach($grades as $grade)
			<a href="/grade/{{ $grade->id }}/sections" class="list-group-item list-group-item-action d-flex justify-content-between">
				<span>{{ $grade->name }}</span>
				<span class="font-weight-bold">{{ $grade->countStudent() }}</span>
			</a>
			@endforeach

			<div class="text-center pt-4">	
				<h1>{{ $registers->count() }}</h1>
				<h5>Student(s)</h5>
			</div>

		</div>

	</div>
</div>