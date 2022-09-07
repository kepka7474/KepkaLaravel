
@foreach(\App\Models\Country::all() as $key => $city)
{{--    @php(print_r($city->toArray()))--}}
{{--                        <br>--}}
    <a href="https://www.youtube.com">@php(print_r($city->toArray()['name']))</a>

    <br>

@endforeach




