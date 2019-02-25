@extends('registrar.template')
@section('body')
<div class="card">
	<div class="card-header">
		Teacher Subjects
	</div>
	<div class="card-body">
		
		<div class="mb-3">
			<button class="btn btn-primary" data-toggle="modal" data-target="#add_subject">Add Subject</button>
			<button class="btn btn-danger" onclick="$('#subject-table').submit()">Delete Subject</button>
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
		<div class="table-responsive">
		<form method="post" action="/payrolls/{{ $teacher->id }}" id="subject-table">
			@csrf
			@method('DELETE')
		<table class="table mt-5 table-hover">
			<tbody>
				@inject('section','App\Section')
				@inject('teacherSections','App\TeacherSection')
				@foreach($teacher->subjects as $subject)
				<tr>
					<td class="text-center">
						<div class="form-check">
							<input id="check{{ $loop->iteration }}" class="form-check-input" type="checkbox" name="subject[]" value="{{ $subject->id }}">
						</div>
					</td>
					<td>
						{{ $subject->name }}
					</td>
					<td>
						@foreach($teacherSections->where([
							['teacher_id',$teacher->id],
							['subject_id',$subject->id]
						])->get() as $teacherSection)
							<div>{{ $section->find($teacherSection->section_id)->name }}</div>
							<input type="hidden" name="sections[]" value="{{ $teacherSection->section_id }}">
						@endforeach
					</td>
					<td>
						@foreach($teacherSections->where([
							['teacher_id',$teacher->id],
							['subject_id',$subject->id]
						])->get() as $teacherSection)
							<div>{{ $subject->unit }} Unit(s)</div>
						@endforeach
					</td>
					<td class="text-center">
						@edit
							 @slot('href')
							 @endslot
						@endedit
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</form>
		</div>

	</div>
</div>
<div class="modal fade" id="add_subject">
	<div class="modal-dialog">
		<form method="post" action="/payrolls/{{ $teacher->id }}">
		@csrf
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
					subject_id
					@endslot

					@foreach($subject->notSelectedBefore($teacher) as $subject)
					<option value="{{ $subject->id }}">{{ $subject->name }}</option>	
					@endforeach
				@endselect
				
				
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

					<div id="sections" class="col-md-6 offset-md-4 bg-light p-2 rounded collapse">
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
		</form>
	</div>
</div>
<script>

function Section()
{
	this.index = 0;

	this.add = function(){
		$('#sections').show();
		$('#sections').append(this.createDivElement());
		this.index++;
	};

	this.createDivElement = function()
	{
		var div = document.createElement('div');
		div.innerHTML = this.selectedText();
		div.append(this.createInputElement());
		div.append(this.createItalicElement());
		div.className = "btn btn-primary btn-sm m-1";
		div.onclick = function()
		{
			$(this).remove();
			if($('#sections > div').length == 0)
			{
				$('#sections').hide();
			}
		}
		return div;
	}

	this.createInputElement = function()
	{
		var input = document.createElement('input');
		input.type = "hidden";
		input.name = "sections[]";
		input.value = this.selectedValue();
		return input;
	};

	this.createItalicElement = function()
	{
		var icon = document.createElement('i');
		icon.className = "fas fa-times ml-1 text-danger";
		return icon;
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