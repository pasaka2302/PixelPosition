<x-layout>
    <x-page-heading>Results</x-page-heading>

    <section>
        <div class="space-y-6 mt-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
            
            @if ($jobs->isEmpty())
                <div class="text-center text-gray-500">
                    Oops!, no any job found.
                </div>
            @endif
        </div>
    </section>

</x-layout>
