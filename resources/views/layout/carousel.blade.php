<!-- {{-- Start Carousel --}} -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('cdn/imgg/kiostani.png') }}" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="carousel-caption">
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('cdn/imgg/belanja.png') }}" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="carousel-caption"></p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('cdn/imgg/pengiriman.png') }}" class="d-block w-80" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="carousel-caption">
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- {{-- End Carousel --}}
