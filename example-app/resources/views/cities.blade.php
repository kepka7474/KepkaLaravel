{{--@php($country = \App\Models\Country::first())--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Города</h1>
{{--@php(print_r($country))--}}
@foreach(\App\Models\City::all() as $key => $city)
    @php(print_r($city->toArray()['name']))
    <br>
    @php(print_r($city->toArray()['country_id']))
    <br>


@endforeach
</body>
</html>
{{--@foreach($users as $key => $user)--}}
{{--    <ul><b><a href="index.php?id={{$user->id}}"> {{$user->name}}</a>--}}
{{--            @foreach($user->books as $book)--}}
{{--                <li>{{$book->name}}</li>--}}
{{--            @endforeach--}}
{{--        </b></ul>--}}
{{--@endforeach--}}
