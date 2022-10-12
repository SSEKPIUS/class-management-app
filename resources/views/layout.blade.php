<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container mx-auto font-serif">
    <nav class="flex flex-row justify-between h-16 items-center shadow-md">
        <div class="px-5 text-2xl">
            <a href="/">
                Class Management
            </a>
        </div>
        <div class="flex content-between space-x-10 px-10 text-lg">
            <a href="{{ route('students.create') }}" class="hover:underline hover:underline-offset-1">Add New Student</a>
        </div>
    </nav>

    @yield('content')
</body>

</html>