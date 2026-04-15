<section id="our-process" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-10">
            <div class="col-span-9 relative">
                <div class="absolute -bottom-1/2 right-0 max-md:w-55 max-md:bottom-0 max-sm:-translate-y-1/3">
                    <img class="max-w-full an_slide-in" data-direction="left" data-delay="0.3" src="{{ asset('images/shapes/3d-item-5.png') }}" alt="">
                </div>
                <h2 class="relative an_text-appear">How we <span class="gradient-text">work</span></h2>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4 mb-8">
            <div class="col-span-3 max-smd:col-span-9 an_text-split">
                <h4 class="max-sm:mb-10 split" data-delay="0.3">Three ways to engage, depending on where you are.</h4>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4">
            <div class="col-span-4 max-smd:hidden flex items-center">
                <img src="{{ asset('images/shapes/3d-item-6.png') }}" class="an_slide-in" data-delay="0.4">
            </div>
            <div class="col-span-5 max-smd:col-span-9">
                <ul class="our-process-list overflow-hidden an_list_appear" data-direction="bottom" data-delay="0.6">
                    @foreach ($steps as $index => $step)
                        <li class="flex items-start our-process-item relative z-{{ count($steps) - $index }}">
                            <div class="gradient-block-bg rounded-full mr-22.5 max-sm:mr-6 flex items-center justify-center">
                                <div class="our-process-number number m-0.5 max-sm:m-px">
                                    {{ $index + 1 }}
                                </div>
                            </div>
                            <div class="our-process-content">
                                <h5 class="mb-1 max-sm:mb-1">{{ $step['title'] }}</h5>
                                <p class="text-sm text-black/50 mb-3 uppercase tracking-wide">{{ $step['duration'] }}</p>
                                <p class="text-black/70">{{ $step['description'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-10 pl-0 an_text-split">
                    <p class="split text-black/60" data-delay="0.5">Pricing depends on scope. Let's talk about what you need.</p>
                </div>
            </div>
        </div>
    </x-container>
</section>
