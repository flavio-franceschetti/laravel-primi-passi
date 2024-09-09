<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @if (count($films))
        @foreach ($films as $film)
            <h5>Titolo Film:</h5>
            <ul>
                <li>{{ $film['titolo'] }}</li>
                    <h5>Il cast:</h5>
                    <ul>
                        @foreach ($film['cast'] as $actor)
                        <li>{{$actor}}</li>    
                        @endforeach
                    </ul>
            </ul>
        @endforeach 
    @else
        <h3>Non ci sono film disponibili</h3>
    @endif
    
</body>
</html>