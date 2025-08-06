@extends('layouts/admin')
@section('content')

<h1>Update Student Profile</h1>


<form action="{{ route('students.update', $student -> id) }}" method="post">
@method('PUT')
@if ($errors->any())
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
@csrf

<input type="text" id="fname" name="fname" value="{{
$student -> fname }}" placeholder="First Name">
<br>

<input type="text" id="lname" name="lname" value="{{
$student -> lname }}" placeholder="Last Name">
<br>

<input type="email" id="email" name="email" value="{{
$student -> email }}" placeholder="Email">
<br>
@error('email')

{{ $message }}

@enderror
<button type="submit">Submit</button>
</form>
</div>
@endsection