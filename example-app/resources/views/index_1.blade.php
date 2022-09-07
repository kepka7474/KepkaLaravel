{{--@php($country = \App\Models\Country::first())--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Страны</h1>
{{--@php(print_r($country))--}}
@foreach(\App\Models\Country::all() as $key => $country)
    <h3>@php(print_r($country->toArray()['name']))</h3>

        <ul>
    @foreach(\App\Models\City::all() as $key => $city)
        @if ($city['country_id'] == $country['id'])

                    <li><p>@php(print_r($city->toArray()['name']))</p></li>
        @endif
    @endforeach
        </ul>


@endforeach
</body>
</html>

