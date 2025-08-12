@extends('layouts/admin')
@section('content')
<h1>Add a Course</h1>

<form action="{{ route('courses.store') }}" method="post">
@if ($errors->any())
<ul>
@foreach ($errors->all() as $error)
<li style="color: red;"><i>{{ $error }}</i></li>
@endforeach
</ul>
@endif
@csrf 

<input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Course Name"> <br>
@error('name')
<span style="color: red;"><i>{{ $message }}</i></span>
@enderror
<br>

<input type="text" id="description" name="description" value="{{ old('description') }}" placeholder="Course Description"> <br>
@error('description')
<span style="color: red;"><i>{{ $message }}</i></span>
@enderror
<br>

<button type="submit">Submit</button>
</form>
@endsection