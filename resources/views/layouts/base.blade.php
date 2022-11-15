<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rint Domains</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="flex w-full p-5 text-white bg-blue-500">
        <div>Home</div>
        <div class="ml-5"><a href="{{ route('providers.index') }}">Providers</a></div>
        <div class="ml-5"><a href="{{ route('domains.index') }}">Domains</a></div>
    </nav>
    <div class="container w-full p-5">
        @yield('content')
    </div>
</body>
</html>
