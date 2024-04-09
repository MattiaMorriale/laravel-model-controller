@extends('layouts/app')

@section('content')
    
<div class="container py-5 ">
    <h1 class="pb-4 text-primary ">Tutti i film del mio DB</h1>

    <hr>

    <div class="d-flex flex-wrap w-100 gap-3">
        @foreach ($movie as $currentmovie)
    
        <div class="card border-primary rounded-0" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-primary ">{{$currentmovie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$currentmovie->original_title}}</h6>

                <hr>

                <ul class="list-unstyled ">
                    <li><span class="text-primary" >Nazionalità:</span> {{$currentmovie->nationality}}</li>
                    <li><span class="text-primary" >Voto:</span> {{$currentmovie->vote}}</li>
                    <li><span class="text-primary" >Data:</span> {{$currentmovie->date}}</li>
                </ul>
            </div>
        </div>
            
        @endforeach
    </div>

    <hr>

</div>

@endsection