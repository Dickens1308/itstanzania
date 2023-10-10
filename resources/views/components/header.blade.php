<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ route('index')  }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">ITSTanzania</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index')  }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about')  }}" class="nav-item nav-link {{ request()->is('about-us') ? 'active' : '' }}">About</a>
{{--            <a href="{{  route('services') }}"--}}
{{--               class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>--}}
            <a href="{{ route('news')  }}" class="nav-item nav-link {{ request()->is('news') ? 'active' : '' }}">News &
                Events</a>
            <a href="{{ route('contact')  }}"
               class="nav-item nav-link {{ request()->is('contact-us') ? 'active' : '' }}">Contact</a>
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>0800 110 147</h4>
    </div>
</nav>
<!-- Navbar End -->
