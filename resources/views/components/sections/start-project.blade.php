<section id="contacts" class="{{ $class }}">
    <img class="absolute top-0 right-0 -translate-y-1/3 max-sm:w-50 max-sm:-translate-y-1/5 max-sm:translate-x-1/5" src="{{ asset('images/shapes/3d-item-8.png') }}" alt="">
    <img class="absolute bottom-0 left-0 translate-y-1/4 max-sm:w-50" src="{{ asset('images/shapes/3d-item-9.png') }}" alt="">
    <x-container class="relative z-10">
        <div class="grid grid-cols-9 gap-4 mb-20 max-sm:mb-12">
            <div class="col-span-5 col-start-3 max-sm:col-span-9 max-sm:col-start-1 an_text-split">
                <p class="split h4 mb-6" data-delay="0.2">I'm Iurii. I've been designing digital products for fifteen years and running marketing teams for twenty. I started building AI agents in 2021, when it still meant writing prompts in YAML files and asking GPT-3 to please not hallucinate.</p>
                <p class="split text-black/70" data-delay="0.4">Atrum is the studio I wished existed when I was running these systems inside companies. Small, senior, hands-on. We build and we stay.</p>
            </div>
        </div>
        <div class="grid grid-cols-9 gap-4">
            <div class="col-span-7 col-start-2 max-sm:col-span-9 max-sm:col-start-1">
                <h2 class="text-center mb-10 max-sm:mb-6 an_text-appear">If you have data you're not using and work that should be automated, <span class="gradient-text">let's talk.</span></h2>
            </div>
            <div class="col-span-9 flex flex-col items-center justify-center gap-4">
                <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })">Start a conversation</x-btn>
                <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })" variant="secondary">Schedule a consultation</x-btn>
            </div>
        </div>
    </x-container>
</section>
