<x-layout>
    <h1 class="my-16 text-center text-3xl font-medium text-slate-700">
        Sign in to your account
    </h1>

    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="mb-8">
                <label class="mb-1 block text-sm font-medium text-slate-900"
                       for="email">E-mail</label>
                <x-text-input name="email" />
            </div>

            <div class="mb-8">
                <label class="mb-1 block text-sm font-medium text-slate-900"
                       for="password">Password</label>
                <x-text-input name="password" type="password"/>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <div class="items-center flex space-x-2">
                        <input type="checkbox" name="remember"
                               class="rounded-sm border border-slate-400">
                        <label for="remember">
                            Remember me
                        </label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forget Password?
                    </a>
                </div>
            </div>

            <x-button class="w-full bg-green-50">
                Login
            </x-button>

        </form>
    </x-card>
</x-layout>
