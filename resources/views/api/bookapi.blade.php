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
    <h3>ID: {{$book->id}}</h3>
    <h3>Title: {{$book->title}}</h3>
    <h3>Info: {{$book->info}}</h3>
    <h3>Author ID: {{$book->author_id}}</h3>
 </div>
</body>
</html>