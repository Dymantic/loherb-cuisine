<section class="my-20">
    <div data-flickity='{"cellAlign": "left", "contain": true, "prevNextButtons": {{ count($images) > 3 ? "true" : "false" }}, "pageDots": false }' class="w-full max-w-xl mx-auto z-0">
        @foreach($images as $image)
        <div class="w-full md:w-1/3">
            <img src="{{ $image }}"
                 alt="" class="h-64 block mx-auto">
        </div>
        @endforeach
    </div>
</section>