@extends('layouts.app')

@section('content')

<h1>
    Courses
</h1>
<table>
<thead>
    <tr>
        <th>Course Name</th>
        <th>Instructor</th>
    </tr>
</thead>
<tbody>
    @foreach ($courses as $course)
    <tr>
        <td>
            {{$course -> title}}
        </td>
        <td>
            {{$course -> instructor}}
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection