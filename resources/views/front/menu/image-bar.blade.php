<section class="my-20">
    <div data-flickity='{"cellAlign": "left", "contain": true, "prevNextButtons": {{ count($images) > 1 ? "true" : "false" }}, "pageDots": false }' class="w-full max-w-xl mx-auto z-0 {{ count($images) < 4 ? 'under-four' : '' }}">
        @foreach($images as $image)
        <div class="w-full md:w-1/3">
            <img data-src="{{ $image }}"
                 alt="" class="h-64 block mx-auto lazyload">
        </div>
        @endforeach
    </div>
</section>
