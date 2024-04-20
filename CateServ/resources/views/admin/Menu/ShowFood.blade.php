<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>Menu Show</h1>
    <h2> Photo: <img src="{{asset('pictures/'.$menu->photo)}}" alt="photo"></h2>
    <h2> Title: {{$menu->title}} </h2>
    <h2> Price: {{$menu->price}} </h2><br>
    <h3> Details: {{$menu->details}} </h3>
</body>
</html>