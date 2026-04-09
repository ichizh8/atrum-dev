<div>
    @isset($jsPath)
        <script>
            {!! file_get_contents($jsPath) !!}
        </script>
    @endisset
    @isset($cssPath)
        <style>
            {!! file_get_contents($cssPath) !!}
        </style>
    @endisset

    <div x-data="LivewireUIModal()" x-on:close.stop="setShowPropertyTo(false)"
        x-on:keydown.escape.window="show && closeModalOnEscape()" x-show="show" class="fixed inset-0 z-50 overflow-y-auto"
        style="display: none;">
        <div class="flex items-center justify-center min-h-dvh px-4 pt-4 pb-10 text-center sm:block sm:p-0">
            <div x-show="show" x-on:click="closeModalOnClickAway()" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 transition-all transform">
                <div class="absolute inset-0 bg-blue-light opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show="show && showActiveComponent" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-bind:class="modalWidth"
                class="inline-block text-left gradient-block-bg text-white rounded-3xl w-fit align-middle overflow-hidden transform transition-all p-px"
                id="modal-container" x-trap.noscroll.inert="show && showActiveComponent" aria-modal="true">
                <div class="bg-white text-black w-full rounded-3xl p-11 relative max-sm:p-6">
                    @forelse($components as $id => $component)
                        <div x-show.immediate="activeComponent == '{{ $id }}'" x-ref="{{ $id }}"
                            wire:key="{{ $id }}">
                            @livewire($component['name'], $component['arguments'], key($id))
                        </div>
                    @empty
                    @endforelse
                </div>
                <button x-on:click="closeModal()" class="absolute top-6 right-6 cursor-pointer text-black/20 transition duration-300 ease-in-out hover:text-black">
                    <x-icon-close class="w-5 h-5" />
                </button>
            </div>
        </div>
    </div>
</div>
