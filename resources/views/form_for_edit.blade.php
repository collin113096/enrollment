<form method="post" action="@yield('form')">
@csrf
@method('PATCH')
@section('form_body')
@include('card_for_non_index')
@show
</form>