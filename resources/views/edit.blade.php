@extends('layout')

@section('content')
<div class="w-96 mx-auto mt-8">
    <h2 class="text-2xl font-semibold underline mb-4">Update student ({{ $student->name }})</h2>
    <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" value="{{ $student->name }}" id="name" name="name" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="literature">Literature:</label><br>
        <input type="text" value="{{ $student->literature }}" id="literature" name="literature" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="mathematics">Mathematics:</label><br>
        <input type="text" value="{{ $student->mathematics }}" id="mathematics" name="mathematics" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="geography">Geography:</label><br>
        <input type="text" value="{{ $student->geography }}" id="geography" name="geography" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="biology">Biology:</label><br>
        <input type="text" value="{{ $student->biology }}" id="biology" name="biology" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <label for="physics">Physics:</label><br>
        <input type="text" value="{{ $student->physics }}" id="physics" name="physics" class="p-2 w-full bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"><br>
        <br>
        <button type="submit" class="font-sans text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center">Update</button>
    </form>

    <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST" class="mt-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="font-sans text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-md text-sm w-full px-5 py-2.5 text-center">Delete</button>
    </form>
</div>
@endsection