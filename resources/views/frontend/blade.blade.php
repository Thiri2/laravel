<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Detail</title>
</head>
<body>
    <h2>This is about page</h2>
    <h4>Hello, {{ $name }}</h4>
    <h4>{!! $name !!}</h4> 
    <p>The current timestamp is {{ time() }}. </p>

    <div>
        @if (count($records) === 1)
            I have one record!
        @elseif (count($records) > 1)
            I have multiple records!
        @else
            I don't have any records!
        @endif
    </div>

    <div>
        @foreach ($users as $user)
            <p>This is user {{ $user['name'] }}</p>
        @endforeach
    </div>
</body>
</html>