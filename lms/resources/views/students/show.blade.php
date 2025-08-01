@extends('layouts/admin')
@section('content')
<div class="row">
<div class="col">
<h1 class="display-2">
Student Profile
</h1>
</div>
</div>
<div class="row">
<div class="col-md-4 mb-3">
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{ $student -> fname }} {{ $student -> lname }}</h5>
<a href="{{ route('students.edit', $student -> id ) }}" class="card-link">Edit</a>

 <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="card-link btn btn-link p-0 m-0 align-baseline">Delete</button>
</div>
</div>
</div>
</div>
@endsection