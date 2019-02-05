@extends('registrar.index')

@section('registrar_content')

<!-- CARD -->
@include('card')

<!-- PAGINATION -->
<div class="d-flex mt-3">
	@yield('pagination')
</div>

@endsection