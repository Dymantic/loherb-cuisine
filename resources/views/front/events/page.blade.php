@extends('front.base')

@section('title')
    {{ trans('events.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('events.seo.title'),
        'ogDescription' => trans('events.seo.description'),
        'ogImage' => url('/images/cuisine_facebook.jpg'),
    ])
@endsection

@section('content')
    <div class="h-12 bg-pinky-grey"></div>
    @component('components.info-section', ['title' => trans('events.intro.heading')])
        <p class="text-center text-purple">{{ trans('events.intro.content') }}</p>
    @endcomponent
    <section>
        <div class="p-0 lg:p-20 slide-show-container events-gallery">
            <div data-flickity='{"imagesLoaded": true, "autoPlay": true}'
                 class="w-full mx-auto slide-show inner-dots large-slider dark">
                @foreach($event_images as $image)
                    <picture class="w-full block mx-auto">
                        <source srcset="{{ $image['small'] }}"
                                media="(max-width: 576px)">
                        <source srcset="{{ $image['full'] }}"
                                media="(min-width: 577px) and (max-width: 900px)">
                        <source srcset="{{ $image['wide'] }}"
                                media="(min-width: 901px)">
                        <img srcset="{{ $image['full'] }}"
                             alt="Loherb Cuisine provides an ideal event venue">
                    </picture>
                @endforeach
            </div>
        </div>
    </section>
    @component('components.info-section-light', ['title' => trans('events.venue.heading')])
        <div class="max-w-4xl mx-auto mb-20 grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-3">
            @foreach($amenities as $amenity)
                    <div class="w-56 max-w-full mx-auto flex items-center text-purple my-1">
                        @include("svgs.amenities.{$amenity}", ['classes' => 'w-5 h-5'])
                        <span class="ml-4">{{ trans("events.venue.amenities.{$amenity}") }}</span>
                    </div>
            @endforeach
        </div>
    @endcomponent
    <section class="section-height events-bottom-banner"></section>
    <section class="reg-section-space bg-pinky-grey">
        <p class="text-purple text-center">{{ trans('events.bookings.prompt') }}</p>
        <div class="text-center mt-12">
            <a href="{{ localUrl('/contact') }}"
               class="text-link text-purple hover:text-purple-soft">{{ trans('events.bookings.link_text') }} &rarr;</a>
        </div>

    </section>
@endsection
