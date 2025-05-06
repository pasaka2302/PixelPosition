@php
    $classes = 'bg-white/10 p-4 rounded-xl border border-transparent hover:border-blue-600 group transition-colors delay-300';
@endphp
<div {{ $attributes(['class'=>$classes]) }}>
 {{ $slot }}
</div>