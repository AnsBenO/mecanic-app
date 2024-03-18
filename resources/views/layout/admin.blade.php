<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Include any additional CSS or stylesheets -->
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-gray-200 w-64 flex-shrink-0">
            <div class="p-4">
                <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 text-sm hover:bg-gray-700">Dashboard</a></li>
                    <!-- Add more sidebar links as needed -->
                </ul>
            </div>
        </aside>
        
        <!-- Main Content Area -->
        <main class="flex-1 p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">@yield('content_title')</h2>
                @yield('content')
            </div>
        </main>
    </div>
    <!-- Include any additional scripts or JavaScript files -->
</body>
</html>
