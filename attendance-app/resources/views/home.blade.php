@extends('canevas')
@section('content')
<table border="1">
    <tr>
        <th>
            Id
        </th>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>
                {{ $student['id'] }} 
            </td>
            <td>
                {{ $student['firstName'] }}
            </td>
            <td>
                {{ $student['lastName'] }}
            </td>
        </tr>
    @endforeach
</table>
@endsection
