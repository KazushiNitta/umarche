<div>
    @if (empty($filename))
        <img src="{{ asset('storage/logo.png') }}" alt="">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}" alt="">
    @endif
</div>
