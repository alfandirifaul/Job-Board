<x-layout>
    <x-breadcrumbs class="mb-4"
        :links="[
        'Jobs' => route('jobs.index'),
        $job->title => '#'
    ]"
    />
    <x-job-card :$job>
        <p class="mb-4 text-sm text-slate-500">
            {!! nl2br($job->description) !!}
        </p>
    </x-job-card>

    <x-card class="mb-4 ">
        <h3 class="text-xs">
            More Jobs from
        </h3>
        <h2 class="mb-4 text-lg font-bold">
            {{ $job->employer->company_name }}
        </h2>

        <div class="text-sm text-slate-500">
            @foreach($job->employer->jobs->filter(fn($otherJob) => $otherJob->id !== $job->id) as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-700 hover:text-slate-500 hover:underline">
                            <a href="{{ route('jobs.show', $otherJob) }}">
                                {{ $otherJob->title }}
                            </a>
                        </div>
                        <div class="text-xs">
                            {{ $otherJob->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-xs">
                        ${{ number_format($otherJob->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>

</x-layout>
