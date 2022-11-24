    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img class="w-full" src="{{ asset('image/banners/Banner.png') }}" alt="banners de inicio">
                </li>
            </ul>
        </div>
    </section>
@push('scripts')
    <script>
        new Splide('.splide', {
            type: 'loop',
            autoplay: true,
        }).mount();
    </script>
@endpush