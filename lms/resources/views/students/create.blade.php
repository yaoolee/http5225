@extends('layouts/admin')
@section('content')
<h1>Add a Student Profile </h1>

<form action="{{ route('students.store') }}" method="post">
@if ($errors->any())
<ul>
@foreach ($errors->all() as $error)
<li style="color: red;"><i>{{ $error }}</i></li>
@endforeach
</ul>
@endif
@csrf 

<input type="text" id="fname" name="fname" value="{{ old('fname') }}" placeholder="First Name"> <br>
@error('fname')
<span style="color: red;"><i>{{ $message }}</i></span>
@enderror
<br>

<input type="text" id="lname" name="lname" value="{{ old('lname') }}" placeholder="Last Name"> <br>
@error('lname')
<span style="color: red;"><i>{{ $message }}</i></span>
@enderror
<br>

<input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"> <br>
@error('email')
<span style="color: red;">{{ $message }}</span>
@enderror
<br><br>

@foreach ($courses as $course)
<input type="checkbox" name="courses[]" value="{{ $course->id }}">{{ $course->name }}<br>
@endforeach
<button type="submit">Submit</button>
</form>
@endsection