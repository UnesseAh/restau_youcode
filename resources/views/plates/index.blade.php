@extends('plates.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="">
            <h2>Crud dyal lay7san l3wane</h2>
        </div>
        <div class="">
            <a class="" href="{{ route('plates.create') }}">Add New Plate</a>
        </div>
    </div>
</div>
{{-- table-dark table-striped table-hover table-bordered" --}}
{{-- <i class="fa-regular fa-eye"></i> --}}
{{-- <i class="fa-solid fa-pen"></i>--}}
{{-- <i class="fa-solid fa-trash"></i>--}}
<table class="table" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>PLATE</th>
        <th>DESCRIPTION</th>
        <th>DAY_SERVED</th>
        <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    @foreach($plates as $plate)
        <tr>
            <td>{{$plate->id}}</td>
            <td><img src="/image/{{$plate->image}}" width="100px" alt=""></td>
            <td>{{$plate->plate}}</td>
            <td>{{ $plate->description }}</td>
            <td>{{$plate->served_in}}</td>
            <td>
                <form action="{{ route('plates.destroy', $plate->id) }}" method="POST">

                <a class="" href="{{ route('plates.show', $plate->id) }}"> View</a>
                <a class="" href="{{ route('plates.edit', $plate->id) }}"> Edit</a>
                @csrf
                @method('delete')
                <button class="" type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

    </tbody>

</table>

@endsection

