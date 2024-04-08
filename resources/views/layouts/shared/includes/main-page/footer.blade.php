<footer class="custom-footer bg-dark py-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div>
                    <div>
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="{{ __('logo light') }}" height="17">
                    </div>
                    <div class="mt-4">
                        <p>{{ __('Premium Multipurpose Admin & Dashboard Template') }}</p>
                        <p>{{ __('You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 ms-lg-auto">
                <div class="row">
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">{{ __('Who We Are') }}</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="#">{{ __('Office') }}</a></li>
                                <li><a href="#">{{ __('Our Services') }}</a></li>
                                <li><a href="#">{{ __('Support') }}</a></li>
                                <li><a href="#">{{ __('Contact Us') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">{{ __('Our Services') }}</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="#">{{ __('Recruitment procedures') }}</a></li>
                                <li><a href="#">{{ __('Labor selection') }}</a></li>
                                <li><a href="#">{{ __('Recruitment contract') }}</a></li>
                                <li><a href="#">{{ __('Recruitment policies') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">{{ __('Support') }}</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="#">{{ __('FAQ') }}</a></li>
                                <li><a href="#">{{ __('Contact') }}</a></li>
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
                        </script> © {{ __('Velzon - Themesbrand') }}
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(app()->getLocale() == 'ar')
                <form type="hidden" class="d-inline" action="{{ route('changeLocale') }}" method="post">
                    @csrf
                    <input type="text" name="lang" value="en" required hidden />
                    <button type="submit" class="btn btn-primary">{{ __('English') }}</button>
                </form>
                @else
                <form type="hidden" class="d-inline" action="{{ route('changeLocale') }}" method="post">
                    @csrf
                    <input type="text" name="lang" value="ar" required hidden />
                    <button type="submit" class="btn btn-primary">{{ __('العربية') }}</button>
                </form>
                @endif
            </div>
        </div>

    </div>
</footer>

<button id="contactBtn" type="button" class="btn btn-outline-danger btn-icon btn-lg">
    <i class="ri-customer-service-2-line"></i>
</button>
<button id="whatsappBtn" type="button" class="btn btn-outline-success btn-icon btn-lg ri-whatsapp-line">
</button>


<style>
    #contactBtn {
        text-align: right;
        z-index: 100;
        position: fixed;
        bottom: 20;
        left: 2%;
    }

    #whatsappBtn {
        font-size: large;
        border-radius: 50%;
        text-align: right;
        z-index: 100;
        position: fixed;
        bottom: 20;
        right: 2%;
    }
</style>