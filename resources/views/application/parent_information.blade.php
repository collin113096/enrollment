<div class="collapse pt-lg-5" id="card2">

		<!-- FATHER NAME -->
		@appText
			@slot('label')
			Father Name
			@endslot

			@slot('error')
			{{ $errors->has('father.name') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			father[name]
			@endslot

			@slot('value')
			{{ old('father.name') }}
			@endslot
		@endappText

		<!-- FATHER CONTACT -->
		@appNumber
			@slot('label')
			Contact
			@endslot

			@slot('error')
			{{ $errors->has('father.contact') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			father[contact]
			@endslot

			@slot('value')
			{{ old('father.contact') }}
			@endslot
		@endappNumber

		<!-- FATHER OCCUPATION -->
		@appText
			@slot('label')
			Occupation
			@endslot

			@slot('error')
			{{ $errors->has('father.occupation') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			father[occupation]
			@endslot

			@slot('value')
			{{ old('father.occupation') }}
			@endslot
		@endappText

		<div class="py-lg-3"></div>

		<!-- MOTHER NAME -->
		@appText
			@slot('label')
			Mother Name
			@endslot

			@slot('error')
			{{ $errors->has('mother.name') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			mother[name]
			@endslot

			@slot('value')
			{{ old('mother.name') }}
			@endslot
		@endappText

		<!-- MOTHER CONTACT -->
		@appNumber
			@slot('label')
			Contact
			@endslot

			@slot('error')
			{{ $errors->has('mother.contact') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			mother[contact]
			@endslot

			@slot('value')
			{{ old('mother.contact') }}
			@endslot
		@endappNumber

		<!-- MOTHER OCCUPATION -->
		@appText
			@slot('label')
			Occupation
			@endslot

			@slot('error')
			{{ $errors->has('mother.occupation') ? 'is-invalid' : '' }}
			@endslot

			@slot('name')
			mother[occupation]
			@endslot

			@slot('value')
			{{ old('mother.occupation') }}
			@endslot
		@endappText
	
	<!-- CARD FOOTER -->
	<div class="d-flex justify-content-between mt-5">
		<div class="btn btn-light" id="card2-button-back"><i class="fas fa-arrow-left mx-2"></i> Back to Form 1</div>			
		<button class="btn btn-primary"><i class="fas fa-check-circle mx-2"></i> Send Application Form</button>
	</div>

<!-- END OF CARD -->
</div>