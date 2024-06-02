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

                </div>
            </div>
        </nav>
        <section class="max-w-screen-xl mx-auto mt-8 px-4">
            <div class="bg-white p-6 shadow-md rounded-lg">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Employee Directory Overview</h2>
                    <p class="text-gray-600 mb-4">
                        Welcome to the Employee Directory. Here you can find a comprehensive list of all our employees
                        along with their respective departments and positions. This directory is designed to help you
                        easily locate and contact any member of our organization.
                    </p>
                    <form action="" method="get" class="bg-white p-4 rounded-lg shadow-md mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <button type="button" onclick="window.location.href='{{ route('welcome') }}'"
                                class="bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg px-4 py-2">
                                Reset
                            </button>
                            <div class="flex items-center">
                                <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Search">
                                <button type="submit"
                                    class="bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg px-4 py-2 ml-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="min-w-full bg-white border border-gray-300 mt-12">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                    Employee
                                    ID</th>
                                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">Name
                                </th>
                                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                    Department</th>
                                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 text-left text-gray-600">
                                    Position
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($employees->isNotEmpty())
                            @foreach($employees as $employee)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $employee->id }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $employee->name }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $employee->department }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $employee->position }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 text-center" colspan="4">No employees
                                    found.
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
        </section>
    </div>
</body>

</html>