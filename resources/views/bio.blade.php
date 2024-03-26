@extends('layouts.layout')

@section('title')
    '{{ $bio['name'] }}'s Bio'
@endsection

@section('navbar-addons')

@endsection

@section('main')
    <h1 style="text-align: center">{{ $bio['name'] }}'s Bio <span class="badge text-bg-secondary">{{ $bio['rank'] }}</span></h1>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" style="margin: auto; padding-top: 20px">
            <div class="card">
                <img src="{{asset('assets/'.$bio['name'].'.png')}}" class="card-img-top" alt="Fotonya {{ $bio['name'] }}">
                <div class="card-body">
                    <a style="text-decoration: none; color: black" href="/profile/bio/{{ $bio['nick'] }}">
                        <h5 class="card-title">{{ $bio['name'] }}</h5>
                    </a>
                    <p class="card-text">{{ $bio['email'] }}</p>
                    <p class="card-text">{{ $bio['about'] }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">{{ $bio['rank'] }}</small>
                </div>
            </div>
            <div class="tombol" style="padding-top:20px; text-align:center;">
                <a href="/profile"><button type="button" class="btn btn-danger">Back</button></a>
            </div>
        </div>
    </div>
@endsection
