<h1>PIZDA CITIES CREATE</h1>
@include('cmsCities/navigation/cmsCityNavigation')
<form method="post" action="/cities">
    Введите название города: <input name="name" value="" type="text">
{{--   <br> Введите id страны: <input name="country_id" value="" type="text">--}}
    выберите страну:
    <select name="country_id">
        @foreach(\App\Models\Country::all() as $country)
            <option value="{{$country['id']}} ">{{$country['name']}} {{$country['id']}}</option>
        @endforeach
    </select>
    <input type="submit" value="сохранить">

    </form>
{{--@php $countries = \App\Models\Country::all()--}}
{{--@endphp--}}
{{--@foreach(\App\Models\Country::all() as $key => $country)--}}
{{--{{$country['name']}}--}}

{{--@endforeach--}}
{{--    @php echo 'suka';--}}
{{--    @endphp--}}



