<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css',
           'resources/js/app.js'])
    <title>Laravel Job Board</title>
</head>
<body class="mx-auto mt-10 max-w-xl text-slate-700
             bg-gradient-to-r from-indigo-200 from-10%
             via-sky-500 via-30% to-emerald-500 to-90%">
    {{ $slot }}

</body>
</html>
