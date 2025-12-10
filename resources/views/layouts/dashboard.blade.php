<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - CBT SDN Baru 01</title>

    @vite('resources/css/app.css')

    {{-- Material Icons for sidebar icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body class="bg-gray-100">

<div class="flex h-screen overflow-hidden">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-blue-900 text-white flex flex-col shadow-lg">

        {{-- Header --}}
        <div class="p-4 border-b border-blue-600 flex items-center gap-3">
            <img src="{{ asset('logo/logo-sdn-baru-01-pagi.png') }}"
                 class="w-10 h-10" alt="">
            <h1 class="font-bold text-lg leading-tight">CBT<br>SDN Baru 01</h1>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="flex-1 p-4 space-y-1">
            @include('partials.sidebar-' . auth()->user()->role)
        </nav>

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}" class="p-4">
            @csrf
            <button
                class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600 transition flex items-center justify-center gap-2">
                <span class="material-icons">logout</span> Logout
            </button>
        </form>

    </aside>

    {{-- MAIN CONTENT --}}
    <div class="flex-1 flex flex-col">

        {{-- TOP NAVBAR --}}
        <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-700">@yield('title')</h2>

            <div class="flex items-center gap-4">
                <span class="text-gray-600">Halo, <span class="font-semibold">{{ auth()->user()->name }}</span></span>
                <img src="{{ asset('logo/user.png') }}" class="w-10 h-10 rounded-full border">
            </div>
        </header>

        {{-- MAIN PAGE SECTION --}}
        <main class="p-6 overflow-y-auto bg-gray-50">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>
