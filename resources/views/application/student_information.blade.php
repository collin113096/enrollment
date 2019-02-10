<div id="card1" class="pt-lg-5">
		
		<!-- LAST NAME -->
		@appText
			@slot('label')
			Last Name
			@endslot

			@slot('error')
			{{ $errors->has('student.last_name') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[last_name]
			@endslot

			@slot('value')
			{{ old('student.last_name') }}
			@endslot
		@endappText

		<!-- FIRST NAME -->
		@appText
			@slot('label')
			First Name
			@endslot

			@slot('error')
			{{ $errors->has('student.first_name') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[first_name]
			@endslot

			@slot('value')
			{{ old('student.first_name') }}
			@endslot
		@endappText

		<!-- MIDDLE NAME -->
		@appText
			@slot('label')
			Middle Name
			@endslot

			@slot('error')
			{{ $errors->has('student.middle_name') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[middle_name]
			@endslot

			@slot('value')
			{{ old('student.middle_name') }}
			@endslot
		@endappText

		<div class="py-lg-3"></div>

		<!-- HOME ADDRESS -->
		@appText
			@slot('label')
			Home Address
			@endslot

			@slot('error')
			{{ $errors->has('student.home_address') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[home_address]
			@endslot

			@slot('value')
			{{ old('student.home_address') }}
			@endslot
		@endappText

		<!-- BIRTH DATE -->
		@appDate
			@slot('label')
			Birth Date
			@endslot

			@slot('error')
			{{ $errors->has('student.birth_date') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[birth_date]
			@endslot

			@slot('value')
			{{ old('student.birth_date') }}
			@endslot
		@endappDate

		<!-- BIRTH PLACE -->
		@appText
			@slot('label')
			Birth Place
			@endslot

			@slot('error')
			{{ $errors->has('student.birth_place') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[birth_place]
			@endslot

			@slot('value')
			{{ old('student.birth_place') }}
			@endslot
		@endappText

		<div class="py-lg-3"></div>
		
		<!-- RELIGION -->
		@appText
			@slot('label')
			Religion
			@endslot

			@slot('error')
			{{ $errors->has('student.religion') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[religion]
			@endslot

			@slot('value')
			{{ old('student.religion') }}
			@endslot
		@endappText

		<!-- GENDER -->
		@appSelect
			@slot('label')
			Gender
			@endslot

			@slot('error')
			{{ $errors->has('student.gender') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[gender]
			@endslot

			<option value="male" @if(old('student.gender') == 'male') selected @endif>Male</option>
			<option value="female" @if(old('student.gender') == 'female') selected @endif>Female</option>
		@endappSelect


		<!-- GRADE -->
		@appSelect
			@slot('label')
			Grade
			@endslot

			@slot('error')
			{{ $errors->has('student.grade_id') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			student[grade_id]
			@endslot

			@foreach($grades as $grade)
				<option value="{{ $grade->id }}" {{ old('student.grade_id') == $grade->id ? 'selected
			':'' }}>{{ $grade->name }}</option>
			@endforeach
		@endappSelect

	<div class="d-flex justify-content-end mt-5">				
		<div class="btn btn-primary" id="card1-button">Next Form <i class="fas fa-arrow-right mx-2"></i></div>
	</div>

</div>