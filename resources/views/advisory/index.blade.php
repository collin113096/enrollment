@extends('main')
@section('title','All Advisory')
@section('card_header','All Advisory')

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
			<a class="btn btn-warning btn-sm badge-pill disabled" disabled>
			@else
			<a class="btn btn-warning btn-sm badge-pill" href="/advisory/{{ $section->id }}/create">
			@endif
			<i class="fas fa-pen"></i> Assign Adviser
			</a>
			
			<!-- EDIT ADVISER -->
			@if($section->hasAdviser() && !$teachers->first()->areAllAssigned())
			<a class="btn btn-primary btn-sm badge-pill" href="/advisory/{{ $section->id }}/edit">									
			@else
			<a class="btn btn-primary btn-sm badge-pill disabled" disabled>
			@endif
			<i class="fas fa-pen"></i> Change Adviser
			</a>	
			
			<!-- DELETE ADVISER -->
			@if($section->hasAdviser())
			<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger btn-sm badge-pill">
			@else
				<button class="btn btn-danger btn-sm badge-pill disabled" disabled="">
			@endif
					<i class="fas fa-trash"></i> Delete Adviser
				</button>
			</form>
			
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $sections->links() }}
@endsection

