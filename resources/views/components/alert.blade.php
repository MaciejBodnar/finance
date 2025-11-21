<div {{ $attributes->merge(['class' => 'rounded-md p-4 bg-yellow-50 text-yellow-800']) }} role="alert">
    @if (isset($title))
        <div class="font-semibold mb-1">{{ $title }}</div>
    @endif
    <div class="text-sm">{{ $slot }}</div>
</div>
