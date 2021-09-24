<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>authorapi</title>
</head>
<body>

    <div class="container">
       @foreach ($books as $bo)
       <h3>ID: {{$bo->id}}</h3>
       <h3>Title: {{$bo->title}}</h3>
       <h3>Info: {{$bo->info}}</h3>
       <h3>Author ID: {{$bo->author_id}}</h3>
       @endforeach
 </div>
</body>
</html>