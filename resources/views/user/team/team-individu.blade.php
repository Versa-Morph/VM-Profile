@extends('user.layouts.app')

@section('content')
<section class="mil-banner-personal">

    <div class="mil-animation-frame">
        <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="7" data-value-2="1.4" style="right: 25%"></div>
    </div>

    <div class="container">
        <div class="mil-banner-content mil-up">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mil-personal-text">
                        <p class="mil-mb-60">Hello! My name is</p>
                        <h1 class="mil-mb-60">{{ str_replace('-', ' ', $name) }}</h1>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <span class="mil-suptitle mil-suptitle-dark mil-mb-60">Passionately Creating Design Wonders: <br>Unleashing Boundless Creativity</span>

                                <a href="" class="mil-link mil-dark mil-arrow-place">
                                    <span>More about me</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mil-portrait-frame">
                        <img src="{{ asset('assets/img/faces/large/1.png') }}" alt="Portrait">
                    </div>
                </div>
            </div>

            <div class="mil-banner-panel">
                <h5>Designing a Better World Today</h5>

                <div class="mil-right">
                    <div class="mil-social-frame">
                        <ul class="mil-social-icons mil-dark">
                            <li><a href="#." target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                            <li><a href="#." target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                            <li><a href="#." target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                            <li><a href="#." target="_blank" class="social-icon"><i class="far fa-circle"></i></a></li>
                        </ul>
                    </div>
                    <a href="portfolio-3.html" class="mil-button mil-arrow-place">
                        <span>View pOrtfolio</span>
                    </a>
                </div>


            </div>

        </div>
    </div>

</section>
@endsection
