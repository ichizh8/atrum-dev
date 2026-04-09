<section id="what-we-do" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-8">
            <div class="col-span-9 relative">
                <h2 class="relative z-10 an_text-appear">What We Do <br/><span class="gradient-text">And Why It Works</span></h2>
                <div class="absolute -bottom-1/2 right-1/9 max-sm:w-30 max-md:right-0 max-sm:top-0 max-sm:bottom-auto max-sm:left-[220px] max-sm:-translate-y-1/2">
                    <img class="max-w-full an_rotate-in" data-delay="0.6" src="{{ asset('images/shapes/3d-item-4.png') }}" alt="" />
                </div>
            </div>
            <div class="col-span-3 max-smd:col-span-9 an_text-split">
                <h4 class="split" data-delay="0.3">We'd rather build something efficient than something expensive.</h4>
            </div>
            <div class="col-span-6 max-smd:col-span-9 flex items-end an_text-split">
                <h6 class="text-black/50 uppercase split" data-delay="0.5">Service <br class="max-smd:hidden"/>Categories</h6>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4">
            <div class="col-span-6 col-start-4 grid gap-4 sm:auto-rows-fr max-smd:col-span-9 max-smd:col-start-1">
                @foreach ($items as $index => $item)
                    <div class="gradient-block-bg rounded-5xl flex max-sm:rounded-3xl an_slide-in" data-delay="{{ $index * 0.2 }}" data-direction="top">
                        <div class="bg-white w-full m-px rounded-5xl px-10 py-6 flex items-center max-sm:rounded-3xl max-sm:flex-col max-sm:px-6">
                            <div class="sm:mr-10 max-sm:mb-4">
                                <img class="w-24" src="{{ asset('images/what-we-do/' . $item['image']) }}" alt="{{ $item['title'] }}">
                            </div>
                            <div>
                                <h5 class="mb-4">{!! $item['title'] !!}</h5>
                                <ul class="list-disc pl-5">
                                    @foreach ($item['list'] as $point)
                                        <li class="mb-0.5 opacity-80">{!! $point !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-container>
</section>