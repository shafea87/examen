@extends('layouts.app')
@section('content')
<table>
    @foreach ($student as $myStudent)
        <br/>
        <tr>
            <td>
                Name: {{ $myStudent->name }}
            </td>
            <td>
                Details: {{ $myStudent->details }}
            </td>
            <td>
                <a href="edit/{{ $myStudent->id }}">Edit</a>
            </td>
            <td>
                <a href="add/{{ $myStudent->id }}">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>


@endsection