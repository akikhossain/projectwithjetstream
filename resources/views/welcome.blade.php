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
                    <a href="{{ url('/dashboard') }}"
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
                    {{-- <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </nav>
        <section class="max-w-screen-xl mx-auto mt-8 px-4">
            <div class="bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Your Mail Content Title</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque sit amet
                    nisl fermentum iaculis. Integer nec ante ac lorem sagittis ullamcorper. Nam vitae felis non orci
                    ullamcorper malesuada. Sed vitae dolor vel odio tempor suscipit ac in velit. Donec ut quam sit amet
                    justo aliquet condimentum.</p>
            </div>
        </section>
    </div>
</body>

</html>
