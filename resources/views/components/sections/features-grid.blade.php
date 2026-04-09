<section id="about" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-3 gap-8 auto-rows-fr max-md:grid-cols-2 max-sm:grid-cols-1">
            @foreach ($features as $index => $feature)
                <div class="flex flex-col items-center justify-center px-14 py-8 rounded-5xl bg-blue-light text-center max-sm:px-6 max-sm:py-10 max-sm:rounded-3xl an_block-appear" 
                data-delay="{{ $index > 2 ? 1.2 - $index * 0.2 : $index * 0.2 }}"
                data-direction="{{ $index > 2 ? 'left' : 'right' }}"
                >
                    <img class="max-h-22.5 mb-8" src="{{ asset('images/features/' . $feature['image']) }}" alt="">
                    <h4 class="mb-2">{!! $feature['title'] !!}</h4>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </x-container>
</section>