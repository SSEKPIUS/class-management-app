@extends('layout')

@section('content')
<table class="mt-8 w-full border-2 border-black border-collapse table-auto text-left">
    <tr class="border-2 border-black h-14">
        <th class="border-2 border-black px-4">Student Name</th>
        <th class="border-2 border-black px-4">Literature</th>
        <th class="border-2 border-black px-4">Mathematics</th>
        <th class="border-2 border-black px-4">Geography</th>
        <th class="border-2 border-black px-4">Biology</th>
        <th class="border-2 border-black px-4">Physics</th>
        <th class="border-2 border-black px-4">Average</th>
        <th class="border-2 border-black px-4"></th>
    </tr>
    @foreach ($students as $student)
    <tr class="border-2 border-black h-14">
        <td class="border-2 border-black px-4">{{ $student->name }}</td>
        <td class="border-2 border-black px-4">{{ $student->literature }}</td>
        <td class="border-2 border-black px-4">{{ $student->mathematics }}</td>
        <td class="border-2 border-black px-4">{{ $student->geography }}</td>
        <td class="border-2 border-black px-4">{{ $student->biology }}</td>
        <td class="border-2 border-black px-4">{{ $student->physics }}</td>
        <td class="border-2 border-black px-4">{{ $student->average }}</td>
        <td class="border-2 border-black px-4">
            <a href="{{ route('students.edit', ['student' => $student->id]) }}">Update</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection