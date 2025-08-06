@extends('layouts/admin')
@section('content')

    <a href="{{ route('students.create') }}">Add student</a> 
<h1>View all Students</h1>


@foreach($students as $student)

    
<h5>{{ $student -> fname }} {{ $student -> lname }}
    <a href="{{ route('students.show', $student->id) }}">Show student</a> 
</h5>
<a href="{{ route('students.edit', $student -> id ) }}">Edit</a>
<form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

@endforeach
@endsection