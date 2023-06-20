<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img src="{{ asset('sailor/img/logo.png') }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="active">{{ __('messages.menu.home') }}</a></li>

                <li class="dropdown"><a href="/product"><span>{{ __('messages.menu.product') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/1">1</a></li>
                        <li><a href="/2">2</a></li>
                        <li><a href="/3">3</a></li>

                    </ul>
                </li>
                <li><a href="/gallery">{{ __('messages.menu.gallery') }}</a></li>
                <li><a href="/contact">{{ __('messages.menu.contact') }}</a></li>

                <li class="dropdown"><a href="#"><span>{{ session()->get('locale') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/lang/change/?lang=en">en</a></li>
                        <li><a href="/lang/change/?lang=id">id</a></li>
                    </ul>
                </li>


                <!-- <li><a href="index.html" class="getstarted">Get Started</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
