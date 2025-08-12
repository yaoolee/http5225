@extends('layouts/admin')
@section('content')

<h1>Update Course</h1>


<form action="{{ route('courses.update', $course -> id) }}" method="post">
@method('PUT')
@if ($errors->any())
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
@csrf

<input type="text" id="name" name="name" value="{{ $course->name }}" placeholder="Course Name">
<br>

<input type="text" id="description" name="description" value="{{ $course->description }}" placeholder="Course Description">
<br>

<button type="submit">Submit</button>
</form>
</div>
@endsection