<section id="home" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-15 max-sm:mb-5">
            <div class="col-span-9 sm:relative">
                <div class="absolute -bottom-10 right-0 max-smd:-translate-y-1/2 max-smd:translate-x-1/2 max-sm:w-45 max-sm:bottom-0 max-sm:-translate-y-8/10 max-sm:translate-x-1/2">
                    <div><img class="max-w-full an_slide-in" data-delay="2.3" data-direction="top" src="{{ asset('images/shapes/3d-item-1.png') }}" alt="" /></div>
                </div>
                <h1 class="relative an_text-appear">AI that actually ships,<br />for companies that<br /><span class="gradient-text">actually ship things.</span></h1>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4 items-center">
            <div class="col-span-4 max-sm:order-2 max-sm:col-span-9 relative">
                <div class="max-sm:absolute max-sm:w-65 left-0 top-0 max-sm:-translate-x-1/2 max-sm:-translate-y-1/2">
                    <div><img class="max-w-full an_slide-in" data-delay="2.3" data-direction="bottom" src="{{ asset('images/shapes/3d-item-2.png') }}" alt=""></div>
                </div>
            </div>
            <div class="col-span-4 max-sm:col-span-9 relative z-10">
                <div class="mb-20 max-sm:mb-15 an_text-split">
                    <p class="h4 mb-6 max-sm:mb-10 split" data-delay="1">We're a fractional AI studio for mid-market manufacturers, distributors, and technical product teams.</p>
                    <p class="split" data-delay="1.3">We've been building agents and AI workflows since 2021. We embed with your team and make them work.</p>
                </div>
                <div class="flex items-center gap-x-4 gap-y-5 flex-wrap max-sm:justify-center">
                    <div class="an_zoom-appear" data-delay="1.8">
                        <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })">Start a conversation</x-btn>
                    </div>
                    <div class="an_zoom-appear" data-delay="1.9">
                        <x-btn href="#our-process" variant="secondary">See how we work</x-btn>
                    </div>
                </div>
                <div class="mt-10 an_opacity-in" data-delay="2.2">
                    <p class="text-black/50 text-sm">Building AI workflows and agents since 2021. Before it was a trend.</p>
                </div>
            </div>
        </div>
    </x-container>
</section>
