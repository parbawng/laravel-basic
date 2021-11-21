<div>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 gap-4">
            <div class="col flex justify-center">
                @if ($product_id == 1)
                <img src="{{ asset('images/15.1.png') }}" alt="banner">
                @elseif ($product_id == 2)
                <img src="{{ asset('images/12.1.png') }}" alt="banner">
                @elseif ($product_id == 3)
                <img src="{{ asset('images/9.1.png') }}" alt="banner">
                @elseif ($product_id == 4)
                <img src="{{ asset('images/8.1.png') }}" alt="banner">
                @elseif ($product_id == 5)
                <img src="{{ asset('images/bn2.6.png') }}" alt="banner" class="min-h-full">
                @elseif ($product_id == 6)
                <img src="{{ asset('images/12.1.png') }}" alt="banner" class="min-h-full">
                @elseif ($product_id == 7)
                <img src="{{ asset('images/bn2.4.png') }}" alt="banner" class="min-h-full">
                @else
                <img src="{{ asset('images/bn2.3.png') }}" alt="banner" class="min-h-full">
                @endif

            </div>
            <div class="col font-serif font-medium text-xl">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam in arcu cursus euismod quis viverra nibh cras pulvinar. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Commodo sed egestas egestas fringilla. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Dolor sit amet consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
