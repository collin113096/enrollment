@extends('enrollee.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if(!$student->isAdmitted())
			<div class="alert alert-warning border-warning">
				<h1>Your Application is Pending...</h1>
				<p>We will check your application form and documents. Be advise that we will send a message to the following contact no.</p>
				<ul>
					<li>Father's Contact No. {{ $student->father->contact }}</li>
					<li>Mother's Contact No. {{ $student->mother->contact }}</li>
				</ul>
			</div>
			@elseif(!$student->isRegistered())
			<div class="alert alert-success boder-success">
				<h1>You're Admitted to Pagsanjan Academy</h1>
				<p>Register Now at Pagsanjan Academy. Make a payment, whether you want to pay through online or through the school the choice is yours</p>
			</div>
			<div class="text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<div class="card-header">
								<h3 class="font-weight-bold">Method One</h3>
								<strong>Make Payment through School</strong>
							</div>
							<div class="card-body">
								<form method="post" action="/assessments/{{ $student->id }}">
									@csrf
								<div class="py-3">
									<strong>Choose Mode of Payment</strong>
									<div class="custom-control custom-radio">
										<input class="custom-control-input" type="radio" name="payment_mode" id="cash" value="Cash">
										<label class="custom-control-label" for="cash">Cash</label>							
									</div>

									<div class="custom-control custom-radio">
										<input class="custom-control-input" type="radio" name="payment_mode" id="installment" value="Installment">
										<label class="custom-control-label" for="installment">Installment</label>
									</div>
								</div>
								<div class="py-4">
									<strong>
										Bring Assessment Form
									</strong>
									<div>
										<button class="mt-1 btn btn-primary btn-sm">Save as PDF</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="font-weight-bold">Method Two</h3>
								<strong>Make payment through Online</strong>
							</div>
							<div class="card-body">
							
							</div>
						</div>
					</div>
				</div>
			</div>
			@else
			<div class="alert alert-success border-success">
				<h1>You are now successfully Enrolled!</h1>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection