<x-layout>
    <x-page-heading>New job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" autofocus />
        <x-forms.input label="Salary" name="salary" placeholder="$90, 000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Dar es Salaam" />

        <x-forms.select name="schedule" label="Schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://portal.ajira.go.tz/advert/display_advert/10413" />
        <x-forms.checkbox label="Feature (Extra Cost)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="Laravel, Backend, PHP" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>