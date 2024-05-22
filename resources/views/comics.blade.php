@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col 4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $comic['title'] }} </h5>
                        <p class="card-text"> {{$comic['series']}} </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection