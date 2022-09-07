<a href="/cities">Go back</a>
<h1>Город</h1>

@php //$id = $_GET['id'];

    //print_r($id);
    echo '<br>';
    $city = App\Models\City::findOrFail($id);
    print_r($city->name);
@endphp
<br><a href="/cities/{{$city->id}}/edit">Редактировать город</a>

