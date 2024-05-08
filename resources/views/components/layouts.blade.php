<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-gradient-to-r from-slate-200 to-stone-200">

    <x-navbar></x-navbar>

    <main class="flex-grow p-4">
        {{ $slot }}
    </main>

    <x-footer></x-footer>

</body>

</html>
