@extends('plates.layout')
@section('content')
<div class="d-flex justify-content-between">
    <div>
        <h2>Add A New Plate to the menu</h2>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('plates.index') }}">Go Back</a>
    </div>
</div>
<form action="{{ route('plates.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input name="plate" id="name" type="text" class="form-control" placeholder="Plate Name">
        <label for="name" >Plate</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" id="detail" class="form-control" placeholder="Give a short description about the plate" style="height: 100px"></textarea>
        <label for="detail">Detail</label>
    </div>
    <div class="form-floating">
        <input name="served_in" class="form-control" type="text"  id="day" placeholder="Day">
        <label for="date">Day</label>
    </div>
    <div>
        <br>
        <input name="image" type="file" accept="image/*" placeholder="image">
    </div>
    <div class="mt-2 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>





@endsection
