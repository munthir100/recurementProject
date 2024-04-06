<nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
            <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" href="/#hero">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#services">{{ __('Services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#features">{{ __('Features') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#FAQ">{{ __('FAQ') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">{{ __('Contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.workers') ? 'active' : '' }}" href="{{route('home.workers')}}">{{ __('Workers') }}</a>
                </li>
                @auth('account')
                @if(request()->user('account')->account_type_id == \App\Models\AccountType::OFFICE)
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#uploadCVModal">
                    <span><i class="ri-upload-cloud-line align-bottom me-1"></i> Upload CV</span>
                </button>
                @endif
                @endauth
            </ul>


            <div class="">
                @guest('account')
                <a href="{{ route('account.login') }}" class="btn btn-primary">{{ __('Sign in') }}</a>
                @else
                <a href="#" class="btn btn-primary position-relative p-0 avatar-xs rounded">
                    <span class="avatar-title bg-transparent">
                        {{ substr(request()->user('account')->name, 0, 1) }}
                    </span>
                    <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1">
                        <span class="visually-hidden">{{ __('unread messages') }}</span>
                    </span>
                </a>
                <form id="logout-form" action="{{ route('account.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#uploadCVModal">
                        <span><i class="ri-upload-cloud-line align-bottom me-1"></i>sign out</span>
                    </button>
                </form>
                @endif
            </div>

        </div>

    </div>
</nav>