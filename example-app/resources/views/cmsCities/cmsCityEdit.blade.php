<b> EDIT CITY </b> <br>
<a href="/cities/{{$id}}">Go back</a>
@include('cmsCities/navigation/cmsCityNavigation')
@php
$city = App\Models\City::findOrFail($id);
$country = App\Models\Country::findOrFail($city->country_id);
@endphp
Правим город: {{$city->name}}<br>
<form method="post" action="/cities/{{$id}}">
<input name="_method" type="hidden" value="PUT">
Введите новое название города: <input name="name" value="{{$city->name}}" type="text">
<br> Введите новый id страны: <input name="country_id" value="{{$country->id}}" type="text">
<input type="submit" value="сохранить">
</form>
<br> Удалить нахуй
<form method="post" action="/cities/{{$id}}">
<input name="_method" type="hidden" value="DELETE">
<input type="submit" value="delete">
</form>

