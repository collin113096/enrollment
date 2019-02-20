@section('right_side_navbar')
<!-- 1ST LIST ITEM -->

@php
$id = auth()->id();
@endphp

<!-- 2ND LIST ITEM -->
<li class="nav-item">
	<a href="/users/{{ $id }}/subjects" class="nav-link">
		My Subjects
	</a>
</li>

@endsection
