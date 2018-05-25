<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="/">MOOD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  d-flex flex-column flex-md-row justify-content-between" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                @guest
                    <a class="dropdown-item " href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    <a class="dropdown-item" href="{{ route('home') }}">My dashboard</a>
                @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('mood') }}">Main</a>
                @endguest
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" style="text-transform: uppercase" href="{{$category->title}}/{{$category->id}}">{{ $category->title  }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SHOES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" style="text-transform: uppercase" href="{{$category->id}}">{{ $category->title  }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SWEATER</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" style="text-transform: uppercase" href="{{$category->id}}">{{ $category->title  }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GLASSES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" style="text-transform: uppercase" href="{{$category->id}}">{{ $category->title  }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">T-SHIRT</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" style="text-transform: uppercase" href="{{$category->id}}">{{ $category->title  }}</a>
                    @endforeach
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>