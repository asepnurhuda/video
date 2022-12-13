<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('frontend') }}"><img src="{{ asset('assets/frontend/img/logodispar.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <x-layout.navigation></x-layout.navigation>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="https://www.facebook.com/dinas.pariwisata.kaltim"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.dispar.kaltimprov.go.id"><i class="fa fa-globe"></i></a>
                        <a href="https://www.instagram.com/dinaspariwisatakaltim/?hl=id"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@paradiseoftheeast"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                {{-- <div class="header__nav__option">
                    Escape To East Borneo Lost In Paradise
                </div> --}}
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>