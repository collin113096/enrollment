@extends('main')
@section('title','All Advisory')
@section('card_header','All Advisory')

@section('column_width')
<div class="col-md-10">
@endsection

@section('table_head')
	<th>Section Name</th>
	<th>Adviser</th>
	<th class="text-center">Action</th>
@endsection


@section('table_body')
	@foreach($sections as $section)
	<tr>
		<td>{{ $section->name }}</td>
		<td>
			@php 
				if(count($section->teachers) == 0)
				{
					echo "???";
				}
				else
				{
					$adviser = $section->teachers()->first();
					echo $adviser->last_name.", ".$adviser->first_name." ".$adviser->middle_name;
				}
			@endphp
		</td>
		<td class="text-center">
			@php
				$teacher = new \App\Teacher;
			@endphp

			<!-- ASSIGN ADVISER -->
			@if($section->hasAdviser() || $teacher->areAllAssigned())
			<a class="btn btn-warning disabled" disabled>
				<i class="fas fa-pen"></i> Assign Adviser
			</a>
			@else
			<a class="btn btn-warning" href="/advisory/{{ $section->id }}/create">
				<i class="fas fa-pen"></i> Assign Adviser
			</a>
			@endif
			
			<!-- EDIT ADVISER -->
			@if($section->hasAdviser() && !$teachers->first()->areAllAssigned())
			<a class="btn btn-primary" href="/advisory/{{ $section->id }}/edit">
				<i class="fas fa-pen"></i> Change Adviser
			</a>										
			@else
			<a class="btn btn-primary disabled" disabled>
				<i class="fas fa-pen"></i> Change Adviser
			</a>	
			@endif
			
			<!-- DELETE ADVISER -->
			@if($section->hasAdviser())
			<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger">
					<i class="fas fa-trash"></i> Delete Adviser
				</button>
			</form>
			@else
				<button class="btn btn-danger disabled" disabled="">
					<i class="fas fa-trash"></i> Delete Adviser
				</button>
			@endif
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $sections->links() }}
@endsection

