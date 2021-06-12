<div class="text-center {{ $border === 'right' ? 'md:border-r' : '' }} border-purple md:h-64">
    <p class="mb-4 type-h2 text-purple">{{ trans($section['title']) }}</p>
    @foreach($section['options'] as $option)
        <p class="text-purple mb-2">{{ trans($option) }}</p>
    @endforeach
    <p class="mt-4 type-h2 text-purple">{{ $section['price'] }}</p>
</div>

