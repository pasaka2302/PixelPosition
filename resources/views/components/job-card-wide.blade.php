   <x-panel class="flex gap-x-6">
       <div>
           <x-employer-logo :width="90"></x-employer-logo>
       </div>
       <div class="flex-1 flex flex-col">
           <a href="" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
           <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors delay-300">{{ $job->title }}
           </h3>
           <p class="text-sm text-gray-500 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
       </div>

       <div class="space-x-1">
           @foreach ($job->tags as $tag)
               <x-tag :$tag />
           @endforeach
       </div>
   </x-panel>
