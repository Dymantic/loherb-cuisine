<section class="banner-height home-banner flex justify-center items-center relative bg-purple">
    @if(app()->getLocale() === 'en')
        @include('svgs.logos.Eng_Cuisine', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @else
        @include('svgs.logos.Ch_Cuisine', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @endif

    @include('front.partials.banner-scroll-down')
</section>
