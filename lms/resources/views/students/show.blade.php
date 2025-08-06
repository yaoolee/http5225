@extends('layouts/admin')
@section('content')

<h1>Student Profile</h1>


<h5>Full name: {{ $student -> fname }} {{ $student -> lname }}</h5>
<a href="{{ route('students.edit', $student -> id ) }}">Edit</a>

 <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection