<h1>CITIES INDEX</h1>

<a href="cities/create">CREATE CITY</a><br>
@include('cmsCities/navigation/cmsCityNavigation')

<br><b>ГОРОДА: </b><br>
@php ($cities = App\Models\City::all())
    @foreach ($cities as $key => $city)
        <br><a href="/cities/{{$city->id}}">{{$city->name}}</a>
    @endforeach


@yield('cmsCities/navigation/cmsCityBottom')
