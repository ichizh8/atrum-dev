<div class="w-[500px] max-w-full bg-white">
    <h3 class="mb-8 max-sm:mb-6">Contact Us</h3>
    <div class="relative mb-4">
        <input
            type="text"
            wire:model.live="client_name"
            placeholder="Name*"
            class="rounded-xl border border-black/20 w-full px-4 py-3 max-sm:p-3 @error('client_name') border-red-700 @enderror focus:ring-0 focus:outline-0 focus:border-blue" />
        @error('client_name')
        <span class="text-xs text-red-700 absolute top-full left-4">{{ $message }}</span>
        @enderror
    </div>
    <div class="relative mb-4">
        <input
            type="text"
            wire:model.live="client_email"
            placeholder="Email*"
            class="rounded-xl border border-black/20 w-full px-4 py-3 max-sm:p-3 @error('client_email') border-red-700 @enderror focus:ring-0 focus:outline-0 focus:border-blue" />
        @error('client_email')
        <span class="text-xs text-red-700 absolute top-full left-4">{{ $message }}</span>
        @enderror
    </div>
    <div class="relative mb-4">
        <input
            type="text"
            wire:model.live="client_phone"
            placeholder="Phone*"
            class="rounded-xl border border-black/20 w-full px-4 py-3 max-sm:p-3 @error('client_phone') border-red-700 @enderror focus:ring-0 focus:outline-0 focus:border-blue" />
        @error('client_phone')
        <span class="text-xs text-red-700 absolute top-full left-4">{{ $message }}</span>
        @enderror
    </div>
    <div class="relative mb-4 max-sm:mb-2">
        <textarea
            wire:model.live="client_message"
            placeholder="What's on your mind?"
            class="rounded-xl border border-black/20 w-full px-4 py-3 max-sm:p-3 resize-none h-50 focus:ring-0 focus:outline-0 focus:border-blue"></textarea>
    </div>
    <div class="mb-8 relative max-sm:mb-6">
        <label class="flex items-center checkbox">
            <input
                type="checkbox"
                id="client_agree"
                wire:model.live="client_agree"
                class="mr-2" />
            <label for="client_agree" class="checkbox-box">
                <x-icon-check class="w-4 h-4" />
            </label>
            <div>I agree with the <a href="#" class="gradient-text hover:underline">privacy policy</a></div>
        </label>
        @error('client_agree')
        <span class="text-xs text-red-700 absolute top-full left-[39px]">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center justify-center relative z-10">
        <x-btn wireClick="send">Submit</x-btn>
    </div>

</div>