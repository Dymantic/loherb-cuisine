@extends('front.base')

@section('title')
    {{ trans('bookings.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('bookings.seo.title'),
        'ogDescription' => trans('bookings.seo.description'),
        'ogImage' => url('/images/cuisine_facebook.jpg'),
    ])
@endsection

@section('content')
<div class="pt-12">
    <iframe src="https://inline.app/booking/loherb?language={{ $lang ?? 'en' }}" frameborder="0" class="w-full min-h-screen"></iframe>
</div>
@endsection
