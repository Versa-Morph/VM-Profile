@extends('user.layouts.app')

@section('content')
<section class="mil-p-120-0">
    <div class="mil-image-frame mil-fw mil-up">
        <img src="{{ asset('assets/img/works/5/1.jpg') }}" alt="image">
        <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/1.jpg') }}" class="mil-zoom-btn">
            <img src="img/icons/zoom.svg" alt="zoom">
        </a>
    </div>
    <div class="container mil-p-0-120" id="project">
        <div class="mil-info mil-up">
            <div>Client: &nbsp;<span class="mil-dark">Envato Market</span></div>
            <div>Date: &nbsp;<span class="mil-dark">April 2023</span></div>
            <div>Author: &nbsp;<span class="mil-dark">Paul Trueman</span></div>
        </div>
        <div class="mil-p-120-0">
            <div class="swiper-container mil-2-slider mil-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="mil-image-frame mil-square mil-drag">
                            <img src="{{ asset('assets/img/works/5/2.jpg') }}" alt="image">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/2.jpg') }}" class="mil-zoom-btn">
                                <img src="img/icons/zoom.svg" alt="zoom">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-image-frame mil-square mil-drag">
                            <img src="{{ asset('assets/img/works/5/3.gif') }}" alt="image">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/3.gif') }}" class="mil-zoom-btn">
                                <img src="img/icons/zoom.svg" alt="zoom">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-image-frame mil-square mil-drag">
                            <img src="{{ asset('assets/img/works/5/4.jpg') }}" alt="image">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/4.jpg') }}" class="mil-zoom-btn">
                                <img src="img/icons/zoom.svg" alt="zoom">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-image-frame mil-square mil-drag">
                            <img src="{{ asset('assets/img/works/5/5.gif') }}" alt="image">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/5.gif') }}" class="mil-zoom-btn">
                                <img src="img/icons/zoom.svg" alt="zoom">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-image-frame mil-square mil-drag">
                            <img src="{{ asset('assets/img/works/5/6.jpg') }}" alt="image">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/6.jpg') }}" class="mil-zoom-btn">
                                <img src="img/icons/zoom.svg" alt="zoom">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-between mil-p-120-120">
                <div class="col-lg-5">
                    <h3 class="mil-up mil-mb-60">Simplicity, elegance, innovation!</h3>
                </div>
                <div class="col-lg-6">
                    <p class="mil-up mil-mb-30">A home surveillance camera that pays great attention to security and user privacy, featuring two modes to provide security while protecting personal privacy.The camera has an open and closed mode, we define the product to have clear two sides, expressing two working states and emotions.</p>

                    <p class="mil-up">Presents a simple and quiet state when not in use, delivering a gentle and security.At the same time, the camera can adapt to a variety of environments, providing elegant ways of wall hanging and standing installation.</p>
                </div>
            </div>
        </div>
        <div class="mil-image-frame mil-horizontal mil-up mil-mb-120">
            <img src="{{ asset('assets/img/works/5/7.gif') }}" alt="image">
            <a data-fancybox="gallery" data-no-swup href="{{ asset('assets/img/works/5/7.gif') }}" class="mil-zoom-btn">
                <img src="img/icons/zoom.svg" alt="zoom">
            </a>
        </div>
        <div class="mil-works-nav mil-up">
            <a href="#!" class="mil-link mil-dark mil-arrow-place mil-icon-left">
                <span>Prev project</span>
            </a>
            <a href="{{ route('user.portfolio') }}" class="mil-link mil-dark">
                <span>All projects</span>
            </a>
            <a href="#!" class="mil-link mil-dark mil-arrow-place">
                <span>Next project</span>
            </a>
        </div>
    </div>
</section>
@endsection
