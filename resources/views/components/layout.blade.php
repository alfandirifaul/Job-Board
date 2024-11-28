<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css',
           'resources/js/app.js'])
    <title>Laravel Job Board</title>
</head>
<body class="mx-auto mt-10 max-w-xl
             bg-gradient-to-r from-indigo-200 from-10%
             via-sky-500 via-30% to-emerald-500 to-90%">

    <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul>
            <li>
                <a href="{{ route('jobs.index') }}"
                   class="hover:underline hover:text-slate-600">
                    Home
                </a>
            </li>
        </ul>

        <ul class="flex space-x-2">
            @auth
               <li class="hover:underline hover:text-slate-600">
                   {{ auth()->user()->name ?? 'Guest' }}
               </li>

                <li>
                    <form action="{{ route('auth.destroy') }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="hover:underline hover:text-slate-600">
                            Logout
                        </button>
                    </form>
                </li>

            @else
                <li>
                    <a href="{{ route('auth.create') }}">
                        Sign in
                    </a>
                </li>
            @endauth
        </ul>
    </nav>

    {{ $slot }}

</body>
</html>
