<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container my-5">
    <h1>{{ $title }}</h1>
<div class="films d-flex gap-4">
    @if (count($films))
    @foreach ($films as $film)
        <div class="card" style="width: 18rem;">
            <img src="{{ $film['poster'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $film['titolo'] }}</h5>
                <p class="card-text">Cast:</p>
                <ul>
                    @foreach ($film['cast'] as $actor)
                    <li>{{$actor}}</li>    
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
    
    @else
        <h4>Non ci sono film disponibili!!!</h4>
    @endif
    
</div>
</body>
</html>