<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @foreach ($questions as $question => $answer)
    <h2>{{ $question }}</h2>
    <p>{{ $answer['answer'] }}</p>
    <p>{{ $answer['source'] }}</p>
    @endforeach
</body>
</html>