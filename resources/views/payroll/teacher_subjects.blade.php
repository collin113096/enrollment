@extends('registrar.template')
@section('body')
<div class="card">
	<div class="card-header">
		Teacher Subjects
	</div>
	<div class="card-body">
		
		<div class="mb-3">
			<button class="btn btn-primary" data-toggle="modal" data-target="#add_subject">Add Subject</button>
			<button class="btn btn-danger">Delete Subject</button>
		</div>

		<!-- FIRST ROW -->
		<div class="row">
			<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					@php $url = $teacher->photo @endphp
					<div class="form-group">
						<div class="text-center">
							<img class="w-25 rounded-circle" src='{{ asset("images/user.jpg") }}'>
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<div><strong>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</strong></div>
					<small>{{ $teacher->job_type }}</small>
				</div>
			</div>
			</div>
		</div>

		<!-- SECOND ROW -->
		<table class="table">
			<tbody>
				
			</tbody>
		</table>


	</div>
</div>
<div class="modal fade" id="add_subject">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<strong>Add Subject</strong>
			</div>
			<div class="modal-body">
				@inject('subject','App\Subject')
				@select
					@slot('label')
					Subject
					@endslot

					@slot('name')
					subject
					@endslot

					@foreach($subject->all() as $subject)
					<option value="{{ $subject->id }}">{{ $subject->name }}</option>	
					@endforeach
				@endselect
				
				@inject('section','App\Section')
				@select
					@slot('label')
					Section
					@endslot

					@slot('name')
					section
					@endslot

					@foreach($section->all() as $section)
					<option value="{{ $section->id }}">{{ $section->name }}</option>	
					@endforeach
				@endselect

					<div id="sections" class="col-md-6 offset-md-4 bg-light p-2 rounded">
						<!-- HIDDEN ELEMENT WILL GO HERE -->
					</div>
				

				<div class="form-group text-center">
					<a href="" onclick="event.preventDefault();section.add()">Add</a>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Save</button>
				<button class="btn" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<script>

function Section()
{
	this.index = 0;

	this.add = function(){

		$('#sections').append(this.createDivElement());
		this.index++;
	};

	this.createDivElement = function()
	{
		var div = document.createElement('div');
		div.textContent = this.selectedText();
		div.append(this.createInputElement());
		div.className = "btn btn-warning btn-sm m-1";
		div.onclick = function(){
			$(this).remove();
		}
		return div;
	}

	this.createInputElement = function()
	{
		var input = document.createElement('input');
		input.type = "hidden";
		input.name = "section[" + this.index + "]";
		input.value = this.selectedValue();
		return input;
	};

	this.createItalicElement = function()
	{

	}

	this.selectedValue = function()
	{
		return $('[name="section"]').val();
	};

	this.selectedText = function()
	{
		return $('[name="section"] option:selected').text();
	}
}

var section = new Section();

</script>
@endsection