@extends('layouts.layout')

@section('title')
    My Profile!
@endsection

@section('main')
    <h1>{{ $greeting }} <span class="badge text-bg-secondary">NEW!</span></h1>
    <hr>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($employee as $em)
            <div class="col">
                <div class="card">
                    <img src="assets/{{ $em['name'] }}.png" class="card-img-top" alt="Fotonya {{ $em['name'] }}">
                    <div class="card-body">
                        <a style="text-decoration: none; color: black" href="/profile/bio/{{$em['nick']}}"><h5 class="card-title">{{ $em['name'] }}</h5></a>
                        <p class="card-text">{{ $em['email'] }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">{{ $em['rank'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="padding-left: 400px; padding-top: 20px; align-content:center;"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7614.721686554973!2d112.7296596685676!3d-7.31291495596184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sUniversitas%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1710755060618!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
