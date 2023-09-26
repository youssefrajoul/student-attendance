@extends('canevas')
@section('content')
<form method="POST" action="{{ route('delete.process') }}">
    @csrf
    <label for="select-student">Choose a student:</label>

    <select name="students" id="select-student">
        @foreach($students as $student)
            <option value="{{$student['id']}}">{{$student['id']}} | {{$student['firstName']}} | {{$student['lastName']}}</option>
         @endforeach
    </select>
        <button type="submit">Delete</button>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
</form> 
@endsection
