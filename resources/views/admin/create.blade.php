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
                                    <h1 class="text-2xl font-bold mb-6 mt-12">Create Employee</h1>
                                    <a href="{{ route('home') }}" type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">List</a>
                                </div>
                                <div id="employee-form" class="mb-6">
                                    <form action="{{ route('employees.store') }}" method="POST"
                                        class="bg-white p-6 rounded-lg shadow-md">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="block text-gray-700">Name</label>
                                            <input type="text" id="name" name="name"
                                                class="w-full px-4 py-2 border rounded-lg">
                                            @error('name')
                                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="department" class="block text-gray-700">Department</label>
                                            <input type="text" id="department" name="department"
                                                class="w-full px-4 py-2 border rounded-lg">
                                            @error('department')
                                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="position" class="block text-gray-700">Position</label>
                                            <input type="text" id="position" name="position"
                                                class="w-full px-4 py-2 border rounded-lg">
                                            @error('position')
                                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-lg">Save</button>
                                    </form>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>