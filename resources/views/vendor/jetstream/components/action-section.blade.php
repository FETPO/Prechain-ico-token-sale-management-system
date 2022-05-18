<div class="md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="">
        <div class="shadow-none">
            {{ $content }}
        </div>
    </div>
</div>
