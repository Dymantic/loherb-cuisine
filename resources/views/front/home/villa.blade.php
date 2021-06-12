<section class="section-height home-villa flex justify-center items-center">
    <div class="max-w-lg p-8 bg-opaque flex flex-col items-center mx-4 md:mx-0" data-usher>
        @if(app()->getLocale() === 'en')
            @include('svgs.logos.Eng_Villa', ['classes' => 'text-green-main h-16 mb-6'])
        @else
            @include('svgs.logos.Ch_Villa', ['classes' => 'text-green-main h-16 mb-6'])
        @endif

        <p class="mb-8 text-green-main text-center">{{ trans('homepage.villa.content') }}</p>
        <a href="https://villa.loherb.com.tw" class="text-link text-green-main hover:text-purple-soft">{{ trans('homepage.villa.link_text') }} &rarr;</a>
    </div>
</section>
