@extends('plates.layout')

@section('content')
    <div>
        <div>
            <h2>This is the edit page</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{route('plates.index')}}">Back</a>
        </div>
    </div>
    <form action="{{ route('plates.update', $plate->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="">Plate</label><br>
        <input name="plate" type="text" value="{{ $plate->plate }}">
        <br>
        <label for="">Description</label><br>
        <textarea placeholder="description" name="description" id="">{{ $plate->description }}</textarea>
        <br>
        <label for="">Sreved In</label><br>
        <input value="{{ $plate->served_in }}" name="served_in" type="text"><br>
        <button type="submit">Update</button>
    </form>
@endsection
