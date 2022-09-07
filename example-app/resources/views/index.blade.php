{{--@php($country = \App\Models\Country::first())--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="/admin/login.php">В Админку</a>
<h1>Компании</h1>

{{--@php(print_r($country))--}}
@foreach($cities as $key => $city)
    <ul><b><a href="city.php?id={{$city->id}}">{{$city->name}}</a></b>
            @foreach($city->companies as $company)
                <li><a href="company.php?id={{$company->id}}">{{$company->name}}</a></li>
            @endforeach
        </ul>
@endforeach
</body>
</html>

