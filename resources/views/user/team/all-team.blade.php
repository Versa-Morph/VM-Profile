@extends('user.layouts.app')

@section('content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="{{ route('user.homepage') }}">Homepage</a></li>
                <li><a href="#!">All Team</a></li>
            </ul>
            <h1 class="mil-mb-60">Meet <span class="mil-thin">Our</span><br> Creative <span class="mil-thin">Team</span></h1>
            <a href="#team" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Our team</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- team -->
<section id="team">
    <div class="container mil-p-120-90">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-4">

                <div class="mil-team-card mil-up mil-mb-30">
                    <img src="{{asset('assets/img/faces/1.jpg')}}" alt="Team member">
                    <div class="mil-description">
                        <div class="mil-secrc-text">
                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('user.team.individu', ['name' => 'Andika-Noor-Ismawan']) }}">Andika Noor Ismawan</a></h5>
                            <p class="mil-link mil-light-soft mil-mb-10">Product Manager</p>
                            <ul class="mil-social-icons mil-center">
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">

                <div class="mil-team-card mil-up mil-mb-30">
                    <img src="{{asset('assets/img/faces/3.jpg')}}" alt="Team member">
                    <div class="mil-description">
                        <div class="mil-secrc-text">
                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('user.team.individu', ['name' => 'Sahri-Ramadan']) }}">Sahri Ramadan</a></h5>
                            <p class="mil-link mil-light-soft mil-mb-10">Software Engineer</p>
                            <ul class="mil-social-icons mil-center">
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">

                <div class="mil-team-card mil-up mil-mb-30">
                    <img src="{{asset('assets/img/faces/2.jpg')}}" alt="Team member">
                    <div class="mil-description">
                        <div class="mil-secrc-text">
                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('user.team.individu', ['name' => 'Unique-Scovi-Egnel']) }}">Unique Scovi Egnel</a></h5>
                            <p class="mil-link mil-light-soft mil-mb-10">Technical Writer</p>
                            <ul class="mil-social-icons mil-center">
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- team end -->
@endsection
