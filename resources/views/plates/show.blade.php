@extends('plates.layout')

@section('content')
    <div>
        <div>
            <h2>Show plates</h2>
        </div>
        <div>
            <a class="" href="{{ route('plates.index') }}">Go back</a>
        </div>
    </div>
    <div>
        <p>{{$plate->plate}}</p>
        <p>{{$plate->description}}</p>
        <p>{{$plate->served_in}}</p>
    </div>


@endsection
