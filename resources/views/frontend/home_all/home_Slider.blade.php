@php
    $homeslide = App\Models\Carrousel::find(1);
@endphp

<section class="hero-area">
    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('frontend/assets/img/bg-img/1.jpg') }});"></div>
{{--            <div class="slide-img bg-img" style="background-image: url({{ $homeslide->image01 }});"></div>--}}
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2> {{ $homeslide->titre }} </h2>
                            <p> {{ $homeslide->description_texte }} </p>
                            <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                <a href="#" class="btn alazea-btn active">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('frontend/assets/img/bg-img/2.jpg') }});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2> {{ $homeslide->titre }} </h2>
                            <p> {{ $homeslide->description_texte }} </p>
                            <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                <a href="#" class="btn alazea-btn active">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
