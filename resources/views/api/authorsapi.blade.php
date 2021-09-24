<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>authorsapi</title>
</head>
<body>
    @foreach ($authors as $da)
        <div class="container">
            {{$da->id}}
         {{$da->name}}
        </div>
    @endforeach
</body>
</html>