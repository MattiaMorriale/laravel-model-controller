@extends('layouts/app')

@section('content')
    
<div class="container py-5 ">
    <h1 class="pb-4 text-primary ">Tutti i film del mio Data Base:</h1>

    <div class="d-flex flex-wrap w-100 gap-3 ">
        @foreach ($movie as $currentmovie)
    
        <div class="card border-primary " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$currentmovie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$currentmovie->original_title}}</h6>
                <ul>
                    <li>Nazionalità: {{$currentmovie->nationality}}</li>
                    <li>Voto: {{$currentmovie->vote}}</li>
                    <li>Data: {{$currentmovie->date}}</li>
                </ul>
            </div>
        </div>
            
        @endforeach
    </div>

</div>

@endsection