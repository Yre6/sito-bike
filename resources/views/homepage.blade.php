@extends('layouts.app')

@section('content')
<div id="homepage-main" class="d-flex">
    <div class="col-6 d-flex justify-content-center p-0">
        <div class="w-50 m-auto d-flex flex-column justify-content-center">
            <h1 class="mb-3">Araig <br> Mountain Bike</h1>
            <h5 class="fw-normal mb-5">
            Amore per la montagna, passione per le due ruote.
            </h5>

            <div class="arrow-button position-relative">
                <button>
                    <a href="{{route('sections')}}">SCOPRI DI PI&Ugrave;</a>
                </button>   
                <img class="position-absolute " src="{{asset('img/arrow.png')}}" alt="">
            </div>
        </div>
       
    </div>
    <div class="col-6 p-0">
        <img class="w-100 h-100" src="{{asset('img/jumbo.jpg')}}" alt="">
    </div>



    <div id="auth-access" class="position-absolute">
        <ul class="navbar-nav ms-auto">
        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user-alt text-black"></i> <span class="ms-2">LOGIN</span> </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><span class="ms-4">REGISTER</span> </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
        </ul>
                
    </div>

</div>
@endsection