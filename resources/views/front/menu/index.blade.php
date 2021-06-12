@extends('front.base')

@section('title')
    {{ trans('menu.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('menu.seo.title'),
        'ogDescription' => trans('menu.seo.description'),
        'ogImage' => url('/images/cuisine_facebook.jpg'),
    ])
@endsection

@section('content')
    <div class="h-12"></div>
    @component('components.info-section', ['title' => trans('menu.intro.heading')])
        <p class="text-purple text-center">{{ trans('menu.intro.content') }}</p>
    @endcomponent

    <div class="flex flex-wrap justify-around md:justify-center mx-auto items-center p-4 menu-sub-nav z-50 bg-ivory shadow-md">
        <a href="" data-jump-target="#dine" data-jump-offset="-50"
           class="type-a1 text-brown-dark uppercase no-underline hover:text-gold mx-1 whitespace-nowrap md:mx-12">{{ trans('menu.dine.title') }}</a>
        <a href="" data-jump-target="#brunch" data-jump-offset="-50"
           class="type-a1 text-brown-dark uppercase no-underline hover:text-gold mx-1 whitespace-nowrap md:mx-12">{{ trans('menu.brunch.title') }}</a>
        <a href="" data-jump-target="#beverages" data-jump-offset="-50"
           class="type-a1 text-brown-dark uppercase no-underline hover:text-gold mx-1 whitespace-nowrap md:mx-12">{{ trans('menu.beverages.title') }}</a>
        <a href="" data-jump-target="#alcohol" data-jump-offset="-50"
           class="type-a1 text-brown-dark uppercase no-underline hover:text-gold mx-1 whitespace-nowrap md:mx-12">{{ trans('menu.alcohol.title') }}</a>
    </div>
    <div class="pb-20">

    </div>

    @include('front.menu.dine')
    @include('front.menu.brunch')
    @include('front.menu.beverages')
    @include('front.menu.alcohol')
    @include('front.partials.back-to-top')
@endsection
