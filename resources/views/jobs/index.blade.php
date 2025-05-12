<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-3xl pt-6">Let's Find Your Next Job</h1>

            <form action="" class="mt-8">
                <input type="text" name=""
                    class="rounded-xl bg-white/15 border-white/10 px-4 py-2 w-full max-w-xl" autofocus
                    placeholder="Web Developer...">
            </form>
        </section>
        <section class="pt-8">
            <x-section-heading>Featured Job</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredjobs as $job)
                <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1 mt-6">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="space-y-6 mt-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
