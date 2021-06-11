<div class="w-full md:w-1/3 @if($loop->index > 2)mt-0 md:mt-20 @endif flex flex-col px-3 justify-between items-center @if(in_array($loop->index, [0,1,3])) md:border-r md:border-purple @endif">
    <div class="text-center">
        <p class="mb-2 md:mb-4 mt-12 md:mt-0 type-h1 text-purple">{{ trans($title) }}</p>
        @foreach($choices as $choice)
            <p class="text-purple mb-2">{{ trans($choice) }}</p>
        @endforeach
    </div>
    <p class="type-h1 mt-1 md:mt-4 text-purple">{{ $price }}</p>
</div>
