<form method="post" action="@yield('form')">
@csrf
@method('PATCH')
@include('card_for_non_index')
</form>