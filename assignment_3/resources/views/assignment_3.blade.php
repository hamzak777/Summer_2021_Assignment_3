<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
    h1 {
    color: black;
    margin-left: 40px;
    font-size: 40px;
    }
    h2 {
    color: black;
    margin-left: 40px;
    font-size: 35px;
    }
    body {
	background-color: #E6E6FA;
	color: green;
    }
    p {
        color: #685206; 
        font-family: Helvetica Neue, sans-serif;
        font-size: 28px;
        margin-left: 40px;
        margin-right: 40px;
    }
    </style>
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