<section id="dine" class="bg-pinky-grey max-w-5xl reg-section-space flex flex-col items-center mx-auto">
    <p class="type-h1 text-navy mb-8">{{ trans('menu.dine.title') }}</p>

    <p class="mb-2 md:mb-4 type-h2 text-purple capitalize">{{ trans($menu['dine']['soup']['title']) }}</p>
    <div class="text-purple text-center">
        @foreach($menu['dine']['soup']['options'] as $option)
            <p class="text-purple capitalize">{{ trans('menu.dine.soup.' . $option) }}</p>
        @endforeach
    </div>

    <p class="mb-2 md:mb-4 type-h2 text-purple capitalize mt-8">{{ trans($menu['dine']['starters']['title']) }}</p>
    @foreach($menu['dine']['starters']['courses'] as $course)
        <p class="text-purple capitalize mb-2">{{ trans($course) }}</p>
    @endforeach

    <p class="mb-2 md:mb-4 type-h2 text-purple capitalize mt-12">{{ trans('menu.appetizers') }}</p>



    <div class="flex flex-col md:flex-row flex-wrap justify-center items-stretch md:mt-12 mb-12 w-full">
        @foreach($menu['dine']['options'] as $option)
            @include('front.menu.menu-column-section', [
                'title' => $option['title'],
                'choices' => $option['choices'],
                'price' => $option['price']
            ])
        @endforeach
    </div>
    <p class="type-h2 text-purple capitalize mb-2">{{ trans($menu['dine']['dessert']['title']) }}</p>
    <div class="text-purple text-center">
        @foreach($menu['dine']['dessert']['options'] as $option)
            <p class="text-purple capitalize mb-2">{{ trans('menu.dine.dessert.' . $option) }}</p>
        @endforeach
    </div>
    <p class="type-h2 text-purple capitalize mt-12 mb-2 md:mb-4">{{ trans($menu['dine']['beverages']['title']) }}</p>
    <div class="text-purple text-center">
        @foreach($menu['dine']['beverages']['options'] as $option)
            <span class="block mx-auto md:inline px-4 @if(!$loop->last) md:border-r md:border-purple @endif">{{ trans('menu.dine.beverages.' . $option) }}</span>
        @endforeach
    </div>
</section>
@include('front.menu.image-bar', ['images' => $menu['dine']['images']])
