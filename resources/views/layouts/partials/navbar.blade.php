<!-- Header Top Start -->

<div class="header-top section">

    <div class="container">

        <div class="row">



            <!-- Header Top Links Start -->

            <div class="header-top-links col-md-9 col-6">



                <!-- Header Links -->

                <ul class="header-links">

                    <li class="disabled block d-none d-md-block"><a id="dateIn" href="#"></a></li>

                    <li class="d-none d-md-block"><a href="#" class="text-center"><img id="myImg" width="15% !important" height="5% !important" src="" alt=""> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Bakı</span></a></li>

                    <li><a href="{{ route('contact') }}"><i class="fa fa-headphones"></i>@lang('home.contact')</a></li>
                    <li><a href="{{ route('about') }}"><i class="fa fa-address-card-o"></i>@lang('home.about_us')</a></li>

                </ul>



            </div><!-- Header Top Links End -->



            <!-- Header Top Social Start -->

            <div class="header-top-social col-md-3 col-6">



                <!-- Header Social -->

                <div class="header-social">

                    <a href="{{ $settings->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>

                    <a href="{{ $settings->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>

                    <a href="{{ $settings->google }}" target="_blank"><i class="fa fa-google-plus"></i></a>

                    <a href="{{ $settings->youtube }}" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    
                </div>



            </div><!-- Header Top Social End -->



        </div>

    </div>

</div><!-- Header Top End -->



<!-- Header Start -->

<div class="header-section section">

    <div class="container">

        <div class="row align-items-center">



            <!-- Header Logo -->

            <div class="header-logo col-md-4 d-none d-md-block">

                <a href="/" class="logo"><img src="/images/{{ $settings->logo }}" alt="Logo"></a>

            </div>



            <!-- Header Banner -->

            @if(!$ads->isEmpty())

                @isset($ads[0])

                    {!! $ads[0]->description !!}

                @endisset

            @else

                <!-- Header Banner -->

                    <div class="header-banner col-md-8 col-12">

                        <div class="banner"><a href="#"><img src="/img/banner/header-banner-1.png" alt="Header Banner"></a></div>

                    </div>

            @endif

        </div>

    </div>

</div><!-- Header End -->



<!-- Menu Section Start -->

<div class="menu-section section bg-dark">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="menu-section-wrap">



                    <!-- Main Menu Start -->

                    <div class="main-menu float-left d-none d-md-block">

                        <nav>

                            <ul>

                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">@lang('home.index')</a></li>
                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">@lang('home.about_us')</a></li>
                                
                                @foreach($categorys as $k => $category)

                                @if($k < 5)

                                    <li class="{{ request()->is('category/'.$category->slug) ? 'active' : '' }}"><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>

                                    @endif

                                @endforeach

                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">@lang('home.contact')</a></li>

                                <li class="has-dropdown"><a href="#">@lang('home.languages')</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="/locale/en">English</a></li>
                                        <li><a href="/locale/az">Azərbaycanca</a></li>
                                        <li><a href="/locale/ru">русский</a></li>
                                        <li><a href="/locale/ar">عربي</a></li>
                                        <li><a href="/locale/tr">Türkçe</a></li>
                                    </ul><!-- Submenu End -->

                                </li>



                            </ul>

                        </nav>

                    </div><!-- Main Menu Start -->



                    <div class="mobile-logo d-none d-block d-md-none"><a href="/"><img src="../../../../public/img/logo.png" alt="Logo"></a></div>


                    <div class="header-search float-right">

                        <!-- Search Toggle -->

                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>



                        <!-- Header Search Form -->

                        <div class="header-search-form">

                            <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                                <input type="text" class="form-control" name="q" placeholder="Axtar">
                            <button style="display:none;" type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>

                            </form>

                        </div>



                    </div>



                    <!-- Mobile Menu Wrap -->

                    <div class="mobile-menu-wrap d-none">

                        <nav>

                            <ul>

                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Ana Səhifə</a></li>

                                @foreach($categorys as $category)

                                    <li class="{{ request()->is('category/'.$category->slug) ? 'active' : '' }}"><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>

                                @endforeach

                            </ul>

                        </nav>

                    </div>



                    <!-- Mobile Menu -->

                    <div class="mobile-menu"></div>



                </div>

            </div>

        </div>

    </div>

</div><!-- Menu Section End -->



<!-- Breaking News Section Start -->

<div class="breaking-news-section section">

    <div class="container">

        <div class="row">

            <div class="col-12">



                <!-- Breaking News Wrapper Start -->

                <div class="breaking-news-wrapper">



                    <!-- Breaking News Title -->

                    <h5 class="breaking-news-title mobile-breaking-news float-left">@lang('home.breaking_news')</h5>



                    <!-- Breaking Newsticker Start -->

                    <ul class="breaking-news-ticker float-left">

                        @foreach($newis as $newiss)

                        <li><a href="#">{!!\Illuminate\Support\Str::words($newiss->title, 15,'...' )!!}</a></li>

                        @endforeach

                    </ul><!-- Breaking Newsticker Start -->



                    <!-- Breaking News Nav -->

                    <div class="breaking-news-nav">

                        <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>

                        <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>

                    </div>



                </div><!-- Breaking News Wrapper End -->



            </div>

        </div>

    </div>

</div><!-- Breaking News Section End -->

