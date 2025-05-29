   {{-- <x-panel class="flex gap-x-6">
       <div>
           <x-employer-logo :employer="$job->employer"></x-employer-logo>
       </div>
       <div class="flex-1 flex flex-col">
           <a href="" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
           <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors delay-300">
               <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
           </h3>
           <p class="text-sm text-gray-500 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
       </div>

       <div class="space-x-1">
           @foreach ($job->tags as $tag)
               <x-tag :$tag />
           @endforeach
       </div>
   </x-panel> --}}

<x-panel class="flex flex-col sm:flex-row items-start gap-4 sm:gap-x-6">
    {{-- Logo --}}
    <div class="flex-shrink-0">
        <x-employer-logo :employer="$job->employer" :width="60" />
    </div>

    {{-- Job Info --}}
    <div class="flex-1 flex flex-col justify-between">
        {{-- Employer name --}}
        <a href="#" class="text-sm text-gray-500">{{ $job->employer->name }}</a>

        {{-- Job title --}}
        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-600 transition-colors delay-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>

        {{-- Schedule + Salary --}}
        <p class="text-sm text-gray-500 mt-2">{{ $job->schedule }} — From {{ $job->salary }}</p>

        {{-- Tags --}}
        <div class="mt-4 flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-panel>
