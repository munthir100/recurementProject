<footer class="custom-footer bg-dark py-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div>
                    <div>
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="{{ __('logo light') }}" height="17">
                    </div>
                    <div class="mt-4 fs-13">
                        <p>{{ __('Premium Multipurpose Admin & Dashboard Template') }}</p>
                        <p class="ff-secondary">{{ __('You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 ms-lg-auto">
                <div class="row">
                    <div class="col-8 mt-4">
                        <h5 class="text-white mb-0">{{ __('Company') }}</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="#">{{ __('About Us') }}</a></li>
                                <li><a href="#">{{ __('Projects') }}</a></li>
                                <li><a href="#">{{ __('Tasks') }}</a></li>
                                <li><a href="#">{{ __('Settings') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">{{ __('Support') }}</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="/#faq">{{ __('FAQ') }}</a></li>
                                <li><a href="/#contact">{{ __('Contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center text-sm-start align-items-center mt-5">
            <div class="col-sm-6">
                <div>
                    <p class="copy-rights mb-0">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © {{ __('Velzon') }}
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end mt-3 mt-sm-0">
                    <ul class="list-inline mb-0 footer-social-link">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-facebook-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-github-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-linkedin-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-google-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-dribbble-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="header-lang-img" src="{{ asset('assets/images/flags/' . (app()->getLocale() == 'ar' ? 'sa' : 'us') . '.svg') }}" alt="{{ __('Header Language') }}" height="20" class="rounded">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item - English -->
                    @if(app()->getLocale() == 'ar')
                    <a href="#" onclick="document.getElementById('enForm').submit()" class="dropdown-item notify-item language py-2" data-lang="en" title="{{ __('English') }}">
                        <img src="{{ asset('assets/images/flags/us.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                        <span class="align-middle">{{ __('English') }}</span>
                    </a>
                    @else
                    <!-- item - Arabic -->
                    <a href="#" onclick="document.getElementById('arForm').submit()" class="dropdown-item notify-item language" data-lang="ar" title="{{ __('Arabic') }}">
                        <img src="{{ asset('assets/images/flags/sa.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                        <span class="align-middle">{{ __('Arabic') }}</span>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>

<form type="hidden" class="d-none" action="{{ route('changeLocale') }}" method="post" id="arForm">
    @csrf
    <input type="text" name="lang" value="ar" required />
</form>
<form type="hidden" class="d-none" action="{{ route('changeLocale') }}" method="post" id="enForm">
    @csrf
    <input type="text" name="lang" value="en" required />
</form>
<!-- end footer -->


<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->