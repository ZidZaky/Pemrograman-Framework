@extends('layouts.layout')

@section('title')
    About Us
@endsection

@section('main')
    <h1>About Us! <span class="badge text-bg-secondary">WELCOME!</span></h1>
    <p>At TheOffice, we strive to redefine the standards of excellence in everything we do. From cutting-edge
        technology solutions to unparalleled customer service, we are committed to delivering the best to our clients.

        Our journey began 2024, and since then, we have grown into a trusted partner for businesses of all sizes.
        With a focus on innovation and continuous improvement, we aim to stay ahead of the curve and anticipate the evolving
        needs of our clients.

        What sets us apart is our dedicated team of professionals who bring expertise, creativity, and passion to every
        project. We foster a culture of collaboration, empowerment, and growth, ensuring that our team members thrive and
        our clients succeed.

        Whether you're looking for software development, IT consulting, or digital marketing solutions, The Office
        is here to help you.</p>

    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
        data-bs-content="Top popover">
        The Office
    </button>
    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
        data-bs-placement="right" data-bs-content="Right popover">
        Objection
    </button>
    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
        data-bs-placement="bottom" data-bs-content="Bottom popover">
        IT Solution
    </button>
    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-content="Left popover">
        Developments
    </button>
    <h1 style="padding-top: 20px">Our Documentations <span class="badge text-bg-secondary">REAL!!</span></h1>

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
                <img src="assets/1.jpg" class="d-block w-100" alt="cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Experiences</h5>
                    <p>There are a lot u can see here!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/2.jpg" class="d-block w-100" alt="page 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Experiences</h5>
                    <p>There are a lot u can see here!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/3.jpg" class="d-block w-100" alt="page 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Experiences</h5>
                    <p>i would like to learn some more!</p>
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
@endsection
