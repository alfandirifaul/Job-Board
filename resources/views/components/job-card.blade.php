<x-card class="mb-2">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">
            {{ $job->title }}
        </h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-700 items-center">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{ $job->location }}</div>
        </div>

        <div class="flex space-x-2 text-xs items-center">
            <x-tag>
                {{ Str::ucfirst($job->experience) }}
            </x-tag>
            <x-tag>
                {{ $job->category }}
            </x-tag>
        </div>
    </div>

    <p class="text-sm text-slate-500 mb-4">
        {!! nl2br($job->description) !!}
    </p>

    {{ $slot }}
</x-card>
