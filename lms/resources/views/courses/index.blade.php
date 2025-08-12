@extends('layouts/admin')
@section('content')

    <a href="{{ route('courses.create') }}" class="btn btn-outline-warning">Add course</a> 
<h1>View all courses</h1>


@foreach($courses as $course)

    
<h5>{{ $course -> name }} <br> {{ $course -> description }}
    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Show course</a> 
</h5>
<a href="{{ route('courses.edit', $course -> id ) }}" class="btn btn-info">Edit</a>
<form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

@endforeach
@endsection