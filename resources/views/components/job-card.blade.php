<x-panel class=" flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 font-bold text-xl transition-colors delay-300">{{ $job->title}}</h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between">
        <div class="flex justify-between items-center mt-auto space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag size='small' :$tag />
            @endforeach
        </div>

        <x-employer-logo />
    </div>
</x-panel>
