<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Авторы</h1>
@foreach($users as $key => $user)
    <ul><b><a href="index.php?id={{$user->id}}"> {{$user->name}}</a>
        @foreach($user->books as $book)
            <li>{{$book->name}}</li>
            @endforeach
        </b></ul>
@endforeach
</body>
</html>
