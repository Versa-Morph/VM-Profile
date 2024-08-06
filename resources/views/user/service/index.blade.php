@extends('user.layouts.app')

@section('content')
<!-- banner -->
<div class="mil-dark-bg">
    <div class="mil-inner-banner">
        <div class="mi-invert-fix">
            <div class="mil-banner-content mil-up">
                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-scale" data-value-1="6" data-value-2="1.4"></div>
                </div>
                <div class="container">
                    <ul class="mil-breadcrumbs mil-light mil-mb-60">
                        <li><a href="{{ route('user.home') }}">Homepage</a></li>
                        <li><a href="{{ route('user.service') }}">Services</a></li>
                    </ul>
                    <h1 class="mil-muted mil-mb-60">This is <span class="mil-thin">what</span><br> we do <span class="mil-thin">best</span></h1>
                    <a href="#services" class="mil-link mil-accent mil-arrow-place mil-down-arrow">
                        <span>Our services</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- services -->
    <section id="services">
        <div class="mi-invert-fix">
            <div class="container mil-p-120-60">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="mil-lines-place mil-light"></div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'Digital-Transformation']) }}" class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">Digital <br>Transformation</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Leading your business through seamless digital transitions for greater efficiency.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Assessment & Strategy</li>
                                        <li class="mil-up">Planning & Design</li>
                                        <li class="mil-up">Implementation</li>
                                        <li class="mil-up">Optimization</li>
                                        <li class="mil-up">Support & Maintenance</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'Digital-Transformation']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'Software-Development']) }}" class="mil-service-card-lg mil-more mil-accent-cursor">
                                    <h4 class="mil-muted mil-up mil-mb-30">Software <br>Development</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Designing and developing software tailored to your specific needs.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Requirement Analysis</li>
                                        <li class="mil-up">Design</li>
                                        <li class="mil-up">Development</li>
                                        <li class="mil-up">Testing</li>
                                        <li class="mil-up">Deployment</li>
                                        <li class="mil-up">Maintenance & Support</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'Software-Development']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'IT-Consulting']) }}" class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">IT <br>Consulting</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Offering expert guidance to optimize your technology infrastructure.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Analysis & Recommendations</li>
                                        <li class="mil-up">Implementation Planning</li>
                                        <li class="mil-up">Execution</li>
                                        <li class="mil-up">Review & Optimization</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'IT-Consulting']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'Data-Analytics-Transformation-and-AI-Solutions']) }}" class="mil-service-card-lg mil-more mil-accent-cursor">
                                    <h4 class="mil-muted mil-up mil-mb-30">Data Analytics <br>and AI Solutions</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Utilizing data and AI to drive strategic business decisions.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Data Collection & Preparation</li>
                                        <li class="mil-up">Analysis & Insights</li>
                                        <li class="mil-up">AI Model Development</li>
                                        <li class="mil-up">Implementation</li>
                                        <li class="mil-up">Monitoring & Optimization</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'Data-Analytics-Transformation-and-AI-Solutions']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'Cybersecurity-Services']) }}" class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">Cybersecurity <br>Services</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Ensuring robust protection for your digital assets and data.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Assessment & Risk Analysis</li>
                                        <li class="mil-up">Strategy & Planning</li>
                                        <li class="mil-up">Implementation</li>
                                        <li class="mil-up">Monitoring & Response</li>
                                        <li class="mil-up">Maintenance & Updates</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'Cybersecurity-Services']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="{{ route('user.service.detail', ['name' => 'Cloud-Solutions']) }}" class="mil-service-card-lg mil-more mil-accent-cursor">
                                    <h4 class="mil-muted mil-up mil-mb-30">Cloud <br>Solutions</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Implementing scalable cloud services to support your business operations.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">Assessment & Planning</li>
                                        <li class="mil-up">Design & Architecture</li>
                                        <li class="mil-up">Migration</li>
                                        <li class="mil-up">Deployment</li>
                                        <li class="mil-up">Management & Optimization</li>
                                    </ul>
                                    <a href="{{ route('user.service.detail', ['name' => 'Cloud-Solutions']) }}" class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- services end -->

<!-- call to action -->
<section class="mil-soft-bg">
    <div class="container mil-p-120-120">
        <div class="row">
            <div class="col-lg-10">

                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Looking to make your mark? We'll help you turn <br> your project into a success story.</span>

            </div>
        </div>
        <div class="mil-center">
            <h2 class="mil-up mil-mb-60">Let’s make an <span class="mil-thin">impact</span><br> together. Ready <span class="mil-thin">when you are</span></h2>
            <div class="mil-up"><a href="contact.html" class="mil-button mil-arrow-place"><span>Contact us</span></a></div>
        </div>
    </div>
</section>
<!-- call to action end -->
@endsection
