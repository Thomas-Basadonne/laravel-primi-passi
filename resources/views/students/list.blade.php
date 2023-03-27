<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista</title>
</head>
<body>
    <h1>Lorem ipsum dolor sit.</h1>

    <h3>
        @forelse($students as $student)
        {{$student}}
        @unless(!$loop->last) , @endunless
        @empty
        la lista è vuota
        @endforelse
    </h3>

    <p>
        <a href="/ ">Vai alla Homepage</a>
    </p>
</body>
</html>