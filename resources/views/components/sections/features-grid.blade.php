<section id="about" class="{{ $class }}">
    <x-container>
        <h3 class="mb-12 max-sm:mb-8 an_text-appear">This is probably for you if</h3>
        <div class="grid grid-cols-3 gap-8 auto-rows-fr max-md:grid-cols-2 max-sm:grid-cols-1">
            @foreach ($features as $index => $feature)
                <div class="flex flex-col justify-center px-14 py-10 rounded-5xl bg-blue-light max-sm:px-6 max-sm:py-8 max-sm:rounded-3xl an_block-appear"
                    data-delay="{{ $index * 0.2 }}"
                    data-direction="bottom"
                >
                    <p class="text-lg leading-snug">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </x-container>
</section>
