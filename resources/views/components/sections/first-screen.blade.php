<section id="home" class="{{ $class }}">
    <x-container>
        <div class="grid grid-cols-9 gap-4 mb-15 max-sm:mb-5">
            <div class="col-span-9 sm:relative">
                <div class="absolute -bottom-10 right-0 max-smd:-translate-y-1/2 max-smd:translate-x-1/2 max-sm:hidden">
                    <div><img class="max-w-full an_slide-in" data-delay="2.3" data-direction="top" src="{{ asset('images/shapes/3d-item-1.png') }}" alt="" /></div>
                </div>
                <h1 class="relative">AI that actually ships,<br />for companies that<br /><span class="gradient-text">actually ship things.</span></h1>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4 items-center">
            <div class="col-span-4 max-sm:hidden">
                <div class="left-0 top-0">
                    <div><img class="max-w-full an_slide-in" data-delay="2.3" data-direction="bottom" src="{{ asset('images/shapes/3d-item-2.png') }}" alt=""></div>
                </div>
            </div>
            <div class="col-span-4 max-sm:col-span-9 relative z-10">
                <div class="mb-20 max-sm:mb-15">
                    <p class="h4 mb-6 max-sm:mb-10">We embed with your team, map your workflows, and build AI systems you keep.</p>
                    <p>For mid-market manufacturers, distributors, service providers, and e-commerce teams that have data they aren't using. Building agents and AI workflows since 2021.</p>
                </div>
                <div class="flex items-center gap-x-4 gap-y-5 flex-wrap max-sm:justify-center">
                    <div>
                        <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })">Start a conversation</x-btn>
                    </div>
                    <div>
                        <x-btn href="#our-process" variant="secondary">See how we work</x-btn>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
