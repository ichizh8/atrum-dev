<{{ @$href ? 'a' : 'button' }}
    @if (@$href) href="{{ $href }}" @endif
    @if (@$wireClick) wire:click="{{ $wireClick }}" @endif
    @if (@$xClick) x-on:click="{{ $xClick }}" @endif
    @if (@$click) onclick="{{ $click }}" @endif
    class="btn {{ $variant }} {{ $size }} {{ $class }}">
    <span>{{ $slot }}</span>
</{{ @$href ? 'a' : 'button' }}>