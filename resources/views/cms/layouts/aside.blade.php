<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home_path')}}" class="app-brand-link">
            <img src="../assets/img/logo-light.svg" alt="" width="40">
            <span class="app-brand-text demo menu-text fw-bolder ms-2" style="font-size: 1.5rem !important">ServeTech
                Pro</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="{{ route('pages') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Pages & SEO</div>
            </a>


        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('homeSlider') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Home Slider</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{ route('about') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">About</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{ route('clients') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Clients</div>
            </a>

        </li>

        <li class="menu-item">
            <a href="{{ route('SectionOne') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Section One</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{ route('SectionTwo') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Section Two</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{ route('portfolioPage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Portfolio</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{ route('PortfolioImage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Portfilio Images</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Services</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('services') }}" class="menu-link">
                        <div data-i18n="Error">Service Page</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('servicesImages')}}" class="menu-link">
                        <div data-i18n="Under Maintenance">Services</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="{{ route('contact') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Contact</div>
            </a>
        </li>
        <!-- User interface -->
        <li class="menu-item">
            <a href="{{ route('footer') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Footer Section </div>
            </a>

        </li>

        <!-- Extended components -->
        <li class="menu-item">
            <a href="{{ route('settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Settings</div>
            </a>

        </li>

        <li class="menu-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Support">Logout</div>
                
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                     style="display: none;">
                                     @csrf
                                 </form>
            </a>
        </li>

    </ul>
</aside>
