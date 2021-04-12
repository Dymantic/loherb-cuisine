<div class="reg-section-space">
    <div class="max-w-xl mx-auto flex flex-col items-center">
        <p class="type-h1 mb-4 text-purple">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-purple')
            </span>
        {{ $slot }}
    </div>
</div>
