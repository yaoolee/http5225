@extends('layouts/admin')
@section('content')
<h1>Add a Student Profile </h1>

<form action="{{ route('students.store') }}" method="post">
@if ($errors->any())
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
@csrf 

<input type="text" id="fname" name="fname" value="{{ old('fname') }}" placeholder="First Name"> <br>
@error('fname')
<i>{{ $message }}</i>
@enderror
<br>

<input type="text" id="lname" name="lname" value="{{ old('lname') }}" placeholder="Last Name"> <br>
@error('lname')
<i>{{ $message }}</i>
@enderror
<br>
<input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"> <br>
@error('email')

{{ $message }}

@enderror
<br>
<button type="submit">Submit</button>
</form>
@endsection