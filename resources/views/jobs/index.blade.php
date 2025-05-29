<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-3xl pt-6">Let's Find Your Next Job</h1>

            <x-forms.form action="/search" class="mt-8">
                <x-forms.input name="q" :label="false" autofocus placeholder="Web Developer ..." />
            </x-forms.form>
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
            <div class="flex flex-wrap gap-2 mt-6">
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
