@extends('layouts.layout')

@section('title')
    Welcome Page!
@endsection

@section('main')
    <h1>{{ $greeting }} <span class="badge text-bg-secondary">NEW!</span></h1>
    <hr>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/cover.png" class="d-block w-100" alt="cover">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/index_3.png" class="d-block w-100" alt="page 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Experiences</h5>
                    <p>There are a lot u can see here!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/index_4.png" class="d-block w-100" alt="page 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Experiences</h5>
                    <p>i would like to learn some more!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/back cover.png" class="d-block w-100" alt="back cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Thankss!</h5>
                    <p>Thanks For Watching</p>
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


    <div class="accordion accordion-flush" id="accordionFlushExample" style="padding-top: 20px;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Mission Statement
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> Our office is <code>dedicated</code> to fostering a <code>collaborative</code>
                    and <code>innovative environment</code>
                    where every team member is empowered to contribute their unique skills and perspectives to achieve our
                    common goals <code>efficiently and effectively.</code></div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Core Values
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <code>Integrity:</code> We conduct ourselves with honesty, transparency, and ethical
                    standards in all our interactions and decisions.
                </div>
                <div class="accordion-body">
                    <code>Excellence:</code> We strive for excellence in everything we do, continuously seeking improvement
                    and
                    delivering high-quality results.
                </div>
                <div class="accordion-body">
                    <code>Teamwork:</code> We value collaboration, respect diverse opinions, and work together cohesively to
                    achieve
                    shared objectives.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Key Objectives
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Cultivate a culture of learning and development to empower team members and
                    support their professional growth and Foster open communication channels to encourage feedback,
                    transparency, and accountability across all levels of the organization.
                </div>
            </div>
        </div>
    </div>
@endsection
