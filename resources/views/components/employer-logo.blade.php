@props(['employer', 'width'=>90])

@php
    $logoPath = public_path('storage/' . $employer->logo);
    $hasLogo = file_exists($logoPath);
    $fallback = 'https://picsum.photos/id/' . rand(0, 100) . '/' . $width;
@endphp

<img 
    src="{{ $hasLogo ? asset('storage/' . $employer->logo) : $fallback }}" 
    alt="Employer Logo" 
    class="rounded-xl" 
    width="{{ $width }}"
>
