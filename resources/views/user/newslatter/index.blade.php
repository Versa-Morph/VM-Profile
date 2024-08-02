@extends('user.layouts.app')

@section('content')
<!-- banner -->
<div class="mil-inner-banner mil-p-0-120">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="{{ route('user.homepage') }}">Homepage</a></li>
                <li><a href="#!">Newslatter</a></li>
            </ul>
            <h1 class="mil-mb-60">Exploring <span class="mil-thin">the World</span> <br> Through Our <span class="mil-thin">Blog</span></h1>
            <a href="#blog" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Publications</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- popular -->
<section class="mil-soft-bg" id="blog">
    <div class="container mil-p-120-60">
        <div class="row align-items-center mil-mb-30">
            <div class="col-lg-6 mil-mb-30">
                <h3 class="mil-up">Popular Publications:</h3>
            </div>
            <div class="col-lg-6 mil-mb-30">
                <div class="mil-adaptive-right mil-up">
                    <a href="blog-inner.html" class="mil-link mil-dark mil-arrow-place">
                        <span>View all</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

                <a href="{{ route('user.newslatter.detail') }}" class="mil-blog-card mil-mb-60">
                    <div class="mil-cover-frame mil-up">
                        <img src="{{ asset('assets/img/blog/1.jpg')}}" alt="cover">
                    </div>
                    <div class="mil-post-descr">
                        <div class="mil-labels mil-up mil-mb-30">
                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                            <div class="mil-label mil-upper">may 24 2023</div>
                        </div>
                        <h4 class="mil-up mil-mb-30">How to Become a Graphic Designer in 10 Simple Steps</h4>
                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                        <a href="{{ route('user.newslatter.detail') }}" class="mil-link mil-dark mil-arrow-place mil-up">
                            <span>Read more</span>
                        </a>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('user.newslatter.detail') }}" class="mil-blog-card mil-mb-60">
                    <div class="mil-cover-frame mil-up">
                        <img src="{{ asset('assets/img/blog/2.jpg')}}" alt="cover">
                    </div>
                    <div class="mil-post-descr">
                        <div class="mil-labels mil-up mil-mb-30">
                            <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>
                            <div class="mil-label mil-upper">may 24 2023</div>
                        </div>
                        <h4 class="mil-up mil-mb-30">16 Best Graphic Design Online and Offline Courses</h4>
                        <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus nisi. Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid, asperiores impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam totam ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                        <a href="{{ route('user.newslatter.detail') }}" class="mil-link mil-dark mil-arrow-place mil-up">
                            <span>Read more</span>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- popular end -->
@endsection
