<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">VeTours.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('tour-list')}}" class="nav-link">Tour</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
            <li class="nav-item">
                @auth
                <span class="nav-link border-yellow-200">
                Hi, {{Auth::user()->name}}
                </span>
                @endauth
            </li>
        </ul>
        </div>
        
    </div>
</nav>