@extends('layouts.layout')

@section('title')
    '{{ $bio['name'] }}'s Bio'
@endsection

@section('main')
    <h1>{{ $bio['name'] }}'s Bio <span class="badge text-bg-secondary">{{ $bio['rank'] }}</span></h1>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="../assets/{{ $bio['name'] }}.png" class="card-img-top" alt="Fotonya {{ $bio['name'] }}">
                <div class="card-body">
                    <a href="/profile/bio/{{ $bio['nick'] }}">
                        <h5 class="card-title">{{ $bio['name'] }}</h5>
                    </a>
                    <p class="card-text">{{ $bio['email'] }}</p>
                    <p class="card-text">{{ $bio['about'] }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">{{ $bio['rank'] }}</small>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">Navbar</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">First</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Second</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
              <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h4 id="scrollspyHeading1">First heading</h4>
        <p>...</p>
        <h4 id="scrollspyHeading2">Second heading</h4>
        <p>...</p>
        <h4 id="scrollspyHeading3">Third heading</h4>
        <p>...</p>
        <h4 id="scrollspyHeading4">Fourth heading</h4>
        <p>...</p>
        <h4 id="scrollspyHeading5">Fifth heading</h4>
        <p>...</p>
      </div>
@endsection
