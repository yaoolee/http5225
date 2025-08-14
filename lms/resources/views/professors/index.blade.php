@extends('layouts/admin')
@section('content')

    <a href="{{ route('professors.create') }}">Add professor</a>
    
    <h1>View all professors</h1>


    @foreach($professors as $professor)

    <h5>{{ $professor -> name }}
        <br>
        Course: {{ $professor->course->name ?? 'No course assigned' }}
       <a href="{{ route('professors.show', $professor->id) }}">Show</a>
    </h5>
<a href="{{ route('professors.edit', $professor -> id ) }}">Edit</a>
<form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

@endforeach
@endsection