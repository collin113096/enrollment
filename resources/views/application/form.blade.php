@extends('enrollee.template')
@section('title','Application Form for Enrollment')
@section('body')
@component('component.create.form')

@section('card_header')
<div class="card-header font-weight-bold py-4 text-center h5">
@endsection

@slot('url')
/application_form
@endslot

@slot('title')
Pagsanjan Academy Application Form For Enrollment
@endslot

@include('errors')

@include('application.student_information')
@include('application.parent_information')

<!-- SCRIPTS -->
<script src="{{ asset('js/application_form_validation.js') }}"></script>
<script src="{{ asset('js/application_form_next_and_back.js') }}"></script>
@endcomponent
@endsection