<nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
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
                    <a class="nav-link" href="/#aboutUs">{{ __('About Us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#recruitmentTrip">{{ __('Recruitment Trip') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#Blog">{{ __('Blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">{{ __('Contact') }}</a>
                </li>
                @auth('account')
                @if(request()->user('account')->account_type_id == \App\Models\AccountType::OFFICE)
                <li class="nav-item">
                    <button type="button" class="btn btn-secondary mb-2 mt-2" data-bs-toggle="modal" data-bs-target="#uploadCVModal">
                        <span><i class="ri-upload-cloud-line align-bottom me-1"></i>{{ __('Upload CV') }}</span>
                    </button>
                </li>
                @endif
                @if(request()->user('account')->account_type_id == \App\Models\AccountType::CALL_CENTER)
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('account.callCenter.inquiryRequests.*') ? 'active' : '' }}" href="{{route('account.callCenter.inquiryRequests.index')}}">{{ __('Requests') }}</a>
                </li>
                @endif
                @endauth
            </ul>

            <div class="d-flex">
                @guest('account')
                <a href="{{ route('account.login') }}" class="btn btn-primary">{{ __('Sign in') }}</a>
                @else

                <form id="logout-form" action="{{ route('account.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#uploadCVModal">
                        <span><i class="ri-upload-cloud-line align-bottom me-1"></i>{{ __('sign out') }}</span>
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</nav>
