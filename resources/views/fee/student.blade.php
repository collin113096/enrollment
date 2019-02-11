@extends('enrollee.template')
@section('title','Tuition Fee')
@section('body')
<style>
span.symbol {
    font-size: 9px;
    vertical-align: text-top;
}

.total {
    font-size: 22px;
    font-weight: bolder;
}

</style>

@if($fees->isNotEmpty())
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info">
			Enroll with only 1,500 pesos everything to pay by installment for whole year <strong>Note:</strong>
			Books - Cash
		</div>
	</div>
</div>
<div class="row">
@endif
@forelse($fees->sortBy('grade_id') as $fee)
<div class="col-md-6">
	<div class="card mb-4">
		<div class="card-body">
			<h3 class="text-center text-secondary">{{ $fee->grade->name }} - {{ $fee->payment_mode }}</h3>
			<ul class="list-group list-group-flush">
				<li class="list-group-item d-flex justify-content-between">
					<strong>Registration Fee:</strong> 
					<div><span class="symbol">Php</span> {{ $fee->registration }}</div>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<strong>Tuition Fee:</strong> 
					<div><span class="symbol">Php</span> {{ $fee->tuition }}</div>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<strong>Misc Fee:</strong> 
					<div><span class="symbol">Php</span> {{ $fee->misc }}</div>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<strong>Computer Fee:</strong> 
					<div><span class="symbol">Php</span> {{ $fee->computer }}</div>
				</li>
				<li class="list-group-item d-flex justify-content-between border">
					<strong>Total</strong> 
					<div class="total"><span class="symbol">Php</span> {{ $fee->total() }}</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@empty
<div class="col-md-12">
	<div class="alert alert-danger">
		No Records Found
	</div>
</div>
@endforelse
</div>

@endsection