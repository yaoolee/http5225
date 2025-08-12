@extends('layouts/admin')
@section('content')

<h1>Course</h1>


<h5>Name: {{ $course -> name }}</h5>
<h5>Description: {{ $course -> description }}</h5>
<a href="{{ route('courses.edit', $course -> id ) }}">Edit</a>

 <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection