@extends('canevas')
@section('content')
<div>

<form method="post" action="{{ route('form.process') }}">
    @csrf
    <label for="">id: </label>
    <input type="number" name="id" id="">
    <br>
    <label for="">First Name:</label>
    <input type="text" name="firstName" id="">
    <br>
    <label for="">Last Name:</label>
    <input type="text" name="lastName" id="">

    <button type="submit" name="submit">Add Student</button>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

</form>
</div>
@endsection