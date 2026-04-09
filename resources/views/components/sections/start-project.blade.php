<section id="contacts" class="{{ $class }}">
    <img class="absolute top-0 right-0 -translate-y-1/3 max-sm:w-50 max-sm:-translate-y-1/5 max-sm:translate-x-1/5" src="{{ asset('images/shapes/3d-item-8.png') }}" alt="">
    <img class="absolute bottom-0 left-0 translate-y-1/4 max-sm:w-50" src="{{ asset('images/shapes/3d-item-9.png') }}" alt="">
    <x-container class="relative z-10">
        <div class="grid grid-cols-9 gap-4">
            <div class="col-span-7 col-start-2 max-sm:col-span-9 max-sm:col-start-1">
                <h2 class="text-center mb-10 max-sm:mb-1"><span class="gradient-text">Ready to Build Something You Won't Have to Rebuild?</span></h2>
            </div>
            <div class="col-span-5 col-start-3 max-sm:col-span-9 max-sm:col-start-1">
                <p class="mb-20 text-center max-sm:mb-10">We work with a small number of clients at a time. Everyone gets senior attention. If you have a problem worth solving properly, let's talk.</p>
            </div>
            <div class="col-span-9 flex flex-col items-center justify-center gap-4">
                <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })">Start a Project</x-btn>
                <x-btn click="Livewire.dispatch('openModal', { component: 'modals.contact-us' })" variant="secondary">Schedule a Consultation</x-btn>
            </div>
        </div>
    </x-container>
</section>
