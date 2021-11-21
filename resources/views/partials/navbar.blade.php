<div class=" bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6">
        <div class="grid grid-cols-6 gap-4">
            <div class="col">
                <img src="{{ asset('images/logo.png') }}" alt="Shekinah" class="w-28">
            </div>
            <div class="col col-span-4 flex flex-wrap content-center justify-center">
                <ul class="uppercase font-semibold font-mono text-lg">
                    <li class="inline-block px-2">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="inline-block px-2">
                        <a href="{{ route('shops') }}">Shop</a>
                    </li>
                    <li class="inline-block px-2">
                        <a href="#">Products</a>
                    </li>
                    <li class="inline-block px-2">
                        <a href="#">Gallery</a>
                    </li>
                    <li class="inline-block px-2">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col flex flex-wrap content-center justify-center">
                <ul class="flex space-x-4">
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                              </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@if (request()->route()->getName() == 'home')
    <div class="info-wrap relative">
        <div class="banner-wrap">
            <img src="{{ asset('images/main-banner.png') }}" alt="banner">
        </div>
        <div class="content-wrap absolute inset-0  flex flex-wrap content-center justify-center text-center">
            <div class="inner-wrap">
                    <h3 class="text-6xl font-mono font-bold text-white mb-20">Furniture Collection</h3>
                    <a href="{{ route('shops') }}" class="bg-gray-50 font-bold font-mono rounded-sm py-4 px-12">Shop Now</a>
            </div>
        </div>
    </div>
@else
    <div class="bg-gray-400 py-20 mb-10"></div>
@endif
