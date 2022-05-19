
<nav class="navbar navbar-expand-lg navbar-light bg-light p-0 ">

    <div class="container-fluid nv-clr p-2">
        <a class="navbar-brand ms-3 fw-bold" href=""><span class="span_color">Deal</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active disabled testt" aria-current="page" class="span_color" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="span_color" href="{{ route('offre') }}">Offre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="span_color" href="{{ route('demande') }}">Demmande</a>
                </li>
            </ul>

            <ul class="navbar-nav  ms-auto me-3">
                {{-- @auth <=> @if(auth()->user) --}}
                @auth
                    <div class="d-flex justify-content-between">
                        <li class="nav-item me-5 mt-1 fw-bolder fs-5">
                            <span class=""> {{ auth()->user()->userName }} </span>
                            {{-- <span class="">
                                @userName
                            </span> --}}
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}">
                                <button class="btn btn-outline-success col me-2 " type="button">logout</button>
                            </a>
                        </li>
                    </div>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}">
                            <button class="btn btn-outline-success col me-2 " type="button">login</button>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('register') }}">
                            <button class="btn btn-sm btn-outline-secondary mt-1" type="button">sing-up</button>
                        </a>
                    </li>
                @endguest

        </div>
        </ul>
    </div>
    </div>

</nav>
