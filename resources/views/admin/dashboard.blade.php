{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larave -JetStrem</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black/50">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">My-Project</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    @auth
                    <a href="{{ url('/home') }}"
                        class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Log
                        in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Register</a>
                    @endif
                    @endauth
                </div>
            </div>
        </nav>

        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="{{ url('/home') }}" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Users</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="max-w-screen-xl mx-auto mt-8 px-4">
            <div class="bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hello, {{ Auth::user()->name }} Welcome</h2>
                <div class="container mx-auto">
                    <h1 class="text-2xl font-bold mb-6 mt-12">Create Department</h1>
                    <form action="" method="POST" class="my-5">
                        @csrf
                        <div class="mb-5">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department
                                Name</label>
                            <input type="text" id="department_name" name="department_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter Department" required />
                        </div>
                        <div class="mb-5">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation
                                Name</label>
                            <input type="text" id="designation_name" name="designation_name"
                                placeholder="Enter Designation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                    </form>
                </div>
        </section>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Tailwind CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Your additional CSS or other meta tags -->
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __(' Admin Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <section class="max-w-screen-xl mx-auto mt-8 px-4">
                        <div class="bg-white p-6   rounded-lg">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hello, {{ Auth::user()->name }}
                                Welcome
                            </h2>
                            @if (Session::has('success'))
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {!! Session::get('success') !!}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                            @endif
                            <div class="container mx-auto">
                                <div class="flex justify-between items-center">
                                    <h1 class="text-2xl font-bold mb-6 mt-12">Employee List</h1>
                                    <a href="{{ route('admin.create') }}" type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Add</a>
                                </div>
                                <form action="" method="get" class="bg-white p-4 rounded-lg shadow-md mb-6">
                                    <div class="flex justify-between items-center mb-4">
                                        <button type="button" onclick="window.location.href='{{ route('home') }}'"
                                            class="bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg px-4 py-2">
                                            Reset
                                        </button>
                                        <div class="flex items-center">
                                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                placeholder="Search">
                                            <button type="submit"
                                                class="bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg px-4 py-2 ml-2">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <table class="min-w-full bg-white border border-gray-300">
                                    <thead>
                                        <tr>
                                            <th
                                                class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                                Employee ID</th>
                                            <th
                                                class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                                Name</th>
                                            <th
                                                class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                                Department</th>
                                            <th
                                                class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                                Position</th>
                                            <th
                                                class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($employees->isNotEmpty())
                                        @foreach ($employees as $employee)
                                        <tr class="hover:bg-gray-100">
                                            <td class="py-2 px-4 border-b border-gray-300">{{ $employee->id }}</td>
                                            <td class="py-2 px-4 border-b border-gray-300">{{ $employee->name }}</td>
                                            <td class="py-2 px-4 border-b border-gray-300">{{ $employee->department }}
                                            </td>
                                            <td class="py-2 px-4 border-b border-gray-300">{{ $employee->position }}
                                            </td>
                                            <td class="py-2 px-4 border-b border-gray-300">
                                                <div class="flex  ">
                                                    <a href="{{ route('employees.edit', $employee->id) }}">
                                                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <a href="{{route('employees.delete',$employee->id)}}"
                                                        class="text-danger w-4 h-4 mr-1">
                                                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">No
                                                employee found</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>