@extends('layouts.master')

@section('title', 'Resurs Informasiya Mərkəzi')

@section('content')

    <!-- Hero Section Start -->

    <div class="hero-section section mt-30 mb-30">


        <div class="container">

            <div class="row">

                <div class="col">

                    <div class="row row-1">



                        <div class="order-lg-2 col-lg-6 col-12">



                            <!-- Hero Post Slider Start -->

                            <div class="post-carousel-1 h-100">

                            @if($analitikas != null)

                                @foreach($analitikas as $analitika)

                                    <!-- Overlay Post Start -->

                                        <div class="post post-large post-overlay hero-post h-100">

                                            <div class="post-wrap h-100">



                                                <!-- Image -->

                                                <div class="image position-relative h-100">
                                                    <img class="w-100 h-100" src="/images/news/{{ $analitika->img }}" alt="{{ $analitika->title }}">
                                                    <div class="overlay-images"></div>
                                                </div>



                                                <!-- Category -->

                                                <a href="{{ route('category', ['cslug'=>$acategory->slug]) }}" class="category color-red-post">{{ $acategory->name }}</a>



                                                <!-- Content -->

                                                <div class="content">



                                                    <!-- Title -->
                                                     <h4 class="title"><a href="{{ route('news',['nslug'=>$analitika->slug,'cslug'=>$acategory->slug]) }}">{{ $analitika->title}}</a></h4>
                                                  


                                                    <!-- Meta -->

                                                    <div class="meta fix">

                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $analitika->created_at->format('Y-m-d') }}</span>

                                                    </div>
                                                </div>



                                            </div>

                                        </div><!-- Overlay Post End -->

                                @endforeach

                            @else

                                <!-- Overlay Post Start -->

                                    <div class="post post-large post-overlay hero-post">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image position-relative"><img class="w-100 h-100" src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category color-red-post">Aktual</a>



                                            <!-- Content -->

                                            <div class="content">

                                            <!-- Title -->
                                                <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>

                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->



                                    <!-- Overlay Post Start -->

                                    <div class="post post-large post-overlay hero-post">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image position-relative"><img class="w-100 h-100" src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category color-red-post">Aktual</a>



                                            <!-- Content -->

                                            <div class="content">

                                            <!-- Title -->
                                                <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>

                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->



                                @endif



                            </div><!-- Hero Post Slider End -->



                        </div>



                        <div class="order-lg-1 col-lg-3 col-12">

                            <div class="row row-1">





                            @if($tehliller)
                            <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                <div class="post-wrap">

                            <!-- Image -->

                            <div class="image position-relative"><img src="/images/news/{{ $tehliller->img }}" alt="{{ $tehliller->title }}"><div class="overlay-images"></div></div>

                            <!-- Category -->

                            <a href="{{ route('category',['cslug'=>$tehcategory->slug]) }}" class="category">{{ $tehcategory->name }}</a>

                            <!-- Content -->

                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="{{ route('news',['nslug'=>$tehliller->slug,'cslug'=>$tehcategory->slug]) }}">{{ $tehliller->title}}</a></h4>

                                

                                                                        

                                <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $tehliller->created_at->format('Y-m-d') }}</span>
                                    </div>

                            </div>

</div>

</div>
<!-- Overlay Post End -->


                                @else
                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image position-relative"><img src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category">Təhlillər</a>



                                            <!-- Content -->

                                            <div class="content">

                                            <!-- Title -->
                                                <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>

                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->

                                @endif

                                @if($serhler)
  <!-- Overlay Post Start -->

  <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

<div class="post-wrap">



    <!-- Image -->

    <div class="image position-relative"><img src="/images/news/{{ $serhler->img }}" alt="{{ $serhler->title }}"><div class="overlay-images"></div></div>



    <!-- Category -->

    <a href="{{ route('category',['cslug'=>$serhcat->slug]) }}" class="category">{{ $serhcat->name }}</a>



                                            <!-- Content -->

                                            <div class="content">

                                                <!-- Title -->
                                                 <h4 class="title"><a href="{{ route('news',['nslug'=>$serhler->slug,'cslug'=>$serhcat->slug]) }}">{{ $serhler->title}}</a></h4>

                                                        

                                                                                                

                                                <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $serhler->created_at->format('Y-m-d') }}</span>
                                                    </div>
                                            </div>



</div>

</div><!-- Overlay Post End -->

                                   
                                @else

                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image position-relative"><img src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category">Şərhlər</a>



                                            <!-- Content -->

                                            <div class="content">

                                            <!-- Title -->
                                                <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>

                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->
                                @endif
                            
                            </div>

                        </div>



                        <div class="order-lg-3 col-lg-3 col-12">

                            <div class="row row-1">

                            @if($medeniyyet)

                                <!-- Overlay Post Start -->

                                     <!-- Overlay Post Start -->

                                     <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

<div class="post-wrap">



    <!-- Image -->

    <div class="image position-relative"><img src="/images/news/{{ $medeniyyet->img }}" alt="{{ $medeniyyet->title }}"><div class="overlay-images"></div></div>



    <!-- Category -->

    <a href="{{ route('category',['cslug'=>$mcategory->slug]) }}" class="category">{{ $mcategory->name }}</a>



    <!-- Content -->

    <div class="content">

        <!-- Title -->
        <h4 class="title"><a href="{{ route('news',['nslug'=>$medeniyyet->slug,'cslug'=>$mcategory->slug]) }}">{{ $medeniyyet->title}}</a></h4>
        

    </div>



</div>

</div><!-- Overlay Post End -->


                                  
                                @else

                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image"><img src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category">Mədəniyyət</a>



                                            <!-- Content -->

                                            <div class="content">

                                            <!-- Title -->
                                                <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>

                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->

                                @endif

                                @if($musahibeler)

                                   <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image position-relative"><img src="/images/news/{{ $musahibeler->img }}" alt="{{ $musahibeler->title }}"><div class="overlay-images"></div></div>




                                            <!-- Category -->

                                            <a href="{{ route('category',['cslug'=>$muscategory->slug]) }}" class="category">{{ $muscategory->name }}</a>




                                            <!-- Content -->

                                            <div class="content">



                                                <!-- Title -->

                                                <h4 class="title"><a href="{{ route('news',['nslug'=>$musahibeler->slug,'cslug'=>$muscategory->slug]) }}">{{ $musahibeler->title}}</a></h4>

                                                <!-- Meta -->

                                                <div class="meta fix">
                                                </div>



                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->

                                @else

                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">

                                        <div class="post-wrap">



                                            <!-- Image -->

                                            <div class="image"><img src="/img/post/news-image.jpg" alt="post"><div class="overlay-images"></div></div>



                                            <!-- Category -->

                                            <a href="#" class="category">Müsahibə</a>



                                            <!-- Content -->

                                            <div class="content">



                                                <!-- Title -->

                                                <h4 class="title"><a href="#">Nümunə xəbər</a></h4>



                                                <!-- Meta -->

                                                <div class="meta fix">

                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>2020-05-02</span>

                                                </div>



                                            </div>



                                        </div>

                                    </div><!-- Overlay Post End -->

                                @endif

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div><!-- Hero Section End -->



    <!-- Post Section Start -->

    <div class="post-section section mt-50">

        <div class="container">



            <!-- Feature Post Row Start -->

            <div class="row">



                <div class="col-lg-8 col-12 mb-50">



                    <!-- Post Block Wrapper Start -->

                    <div class="post-block-wrapper">



                        <!-- Post Block Head Start -->

                        <div class="head feature-head">



                            <!-- Title -->

                            <h4 class="title">@lang('home.cat_1')</h4>



                            <!-- Tab List Start -->

                            <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">

                                <li><a class="active" style="color: #09f109 !important;" data-toggle="tab" href="{{ route('category',['cslug'=>$tarcategory->slug]) }}">@lang('home.see_all')</a></li>



                            </ul><!-- Tab List End -->







                        </div><!-- Post Block Head End -->



                        <!-- Post Block Body Start -->

                        <div class="body pb-0">



                            <!-- Tab Content Start-->

                            <div class="tab-content">



                                <!-- Tab Pane Start-->

                                <div class="tab-pane fade show active" id="feature-cat-1">



                                    <div class="row">



                                        <!-- Post Wrapper Start -->

                                        <div class="col-md-6 col-12 mb-20">

                                            @if($tarixifaktlar != null)

                                                @foreach($tarixifaktlar as $k => $tarixifakt)

                                                    @if($k == 2)

                                                        @break

                                                    @endif

                                                    <div class="post feature-post post-separator-border">

                                                        <div class="post-wrap">



                                                            <!-- Image -->

                                                            <a class="image" href="{{ route('news',['nslug'=>$tarixifakt->slug,'cslug'=>$tarcategory->slug]) }}">
                                                                <img style="width: 20rem !important; height: 15rem !important;" src="/images/news/{{ $tarixifakt->img }}" alt="{{ $tarixifakt->title }}">
                                                            </a>



                                                            <!-- Content -->

                                                            <div class="content">



                                                                <!-- Title -->

                                                                <h4 class="title"><a href="{{ route('news',['nslug'=>$tarixifakt->slug,'cslug'=>$tarcategory->slug]) }}">{{ $tarixifakt->title }}</a></h4>



                                                                <!-- Meta -->

                                                                <div class="meta fix">

                                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ $tarixifakt->author }}</a>


                                                                </div>



                                                                <!-- Description -->

                                                                <p>                                    {!!\Illuminate\Support\Str::words($tarixifakt->short_description, 15,'...' )!!}

                                                                </p>



                                                            </div>



                                                        </div>

                                                    </div><!-- Post End -->



                                                @endforeach

                                            @else

                                                <div class="post feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h4 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                                <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>

                                                            </div>



                                                            <!-- Description -->

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>



                                                        </div>



                                                    </div>

                                                </div><!-- Post End -->

                                                <div class="post feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h4 class="title"><a href="#">"Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                                <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>

                                                            </div>



                                                            <!-- Description -->

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>



                                                        </div>



                                                    </div>

                                                </div><!-- Post End -->

                                            @endif



                                        </div><!-- Post Wrapper End -->



                                        <!-- Small Post Wrapper Start -->

                                        <div class="col-md-6 col-12 mb-20">

                                        @if($tarixifaktlar != null)

                                            @foreach($tarixifaktlar as $k => $tarixifakt)

                                                @if($k > 1)

                                                    <!-- Post Small Start -->

                                                        <div class="post post-small post-list feature-post post-separator-border">

                                                            <div class="post-wrap">



                                                                <!-- Image -->

                                                                <a class="image" href="{{ route('news',['nslug'=>$tarixifakt->slug,'cslug'=>$tarcategory->slug]) }}"><img src="/images/news/{{ $tarixifakt->img }}" alt="{{ $tarixifakt->title }}"></a>



                                                                <!-- Content -->

                                                                <div class="content">



                                                                    <!-- Title -->

                                                                    <h5 class="title"><a href="{{ route('news',['nslug'=>$tarixifakt->slug,'cslug'=>$tarcategory->slug]) }}">{{ $tarixifakt->title }}</a></h5>



                                                                    <!-- Meta -->

                                                                    <div class="meta fix">


                                                                    </div>



                                                                </div>



                                                            </div>

                                                        </div><!-- Post Small End -->

                                                @endif

                                            @endforeach

                                        @else



                                            <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->



                                                <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->



                                                <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>


                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->



                                                <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->



                                                <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->



                                                <!-- Post Small Start -->

                                                <div class="post post-small post-list feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Post Small End -->

                                            @endif

                                        </div><!-- Small Post Wrapper End -->



                                    </div>



                                </div><!-- Tab Pane End-->





                            </div><!-- Tab Content End-->



                        </div><!-- Post Block Body End -->



                    </div><!-- Post Block Wrapper End -->



                </div>



                <!-- Sidebar Start -->

                <div class="col-lg-4 col-12 mb-50">

                    <div class="row">
                    


                        <!-- Single Sidebar -->

                    @include('layouts.partials.others.follower')

                            <!-- Single Sidebar -->

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                                    <div class="carousel-caption">
                                
                                        <a href="{{ route('category', ['cslug' => $mecelle->slug]) }}" class="specialcat">
                                        <p style="margin-bottom: 17.5rem !important;margin-left: -0.5rem;">@lang('home.law_name')</p>
                                        </a>
                                
                                    </div>
                                
                                    <a href="{{ route('category', ['cslug' => $mecelle->slug]) }}" class="sidebar-banner"><img src="/img/unnamed.jpg" alt="Sidebar Banner"></a>

                                    <div class="carousel-caption">
                                   <h1 class="text-white" style="margin-bottom: 0.5rem !important;">@lang('home.sidebar_law_text')</h1>
                                    </div>

                                    
                        </div>

                        
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">
                             @if($qyox != null)

                                @foreach($qyox as $qyo)
                                   
                                <div class="post post-large post-overlay hero-post h-100">

                                        <div class="post-wrap h-100">



                                            <!-- Image -->

                                            <div class="image position-relative h-100">
                                                <img style="width:100%; height: 250px;" class="img-fluid img-thumbnail" src="/images/news/{{ $qyo->img }}" alt="{{ $qyo->title }}">
                                                <div class="overlay-images"></div>
                                            </div>



                                            <!-- Category -->

                                            <a href="{{ route('category', ['cslug'=>$qyoxcategory->slug]) }}" class="category color-red-post">{{ $qyoxcategory->name }}</a>



                                            <!-- Content -->

                                            <div class="content">



                                                <!-- Title -->
                                                <h6 style="font-size: 1rem; line-height: 1.2rem;" class="title"><a href="{{ route('news',['nslug'=>$qyo->slug,'cslug'=>$qyoxcategory->slug]) }}">{!!\Illuminate\Support\Str::words($qyo->title, 15,'...' )!!}</a></h6>
                                            
                                                <!-- Meta -->

                                                <div class="meta fix">

                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $qyo->created_at->format('Y-m-d') }}</span>

                                                </div>
                                            </div>



                                        </div>

                                </div><!-- Overlay Post End -->
                                @endforeach
                                @else
                                <div class="post post-large post-overlay hero-post h-100">

                                        <div class="post-wrap h-100">



                                            <!-- Image -->

                                            <div class="image position-relative h-100">
                                                <img style="width:100%; height: 250px;" class="img-fluid img-thumbnail" src="/img/post/news-image.jpg" alt="resurs">
                                                <div class="overlay-images"></div>
                                            </div>



                                            <!-- Category -->

                                            <a href="{{ route('category', ['cslug'=>$qyoxcategory->slug]) }}" class="category color-red-post">{{ $qyoxcategory->name }}</a>



                                            <!-- Content -->

                                            <div class="content">



                                                <!-- Title -->
                                                <h6 style="font-size: 1rem; line-height: 1.2rem;" class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h6>
                                            
                                                <!-- Meta -->

                                                <div class="meta fix">

                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>2020/5/22</span>

                                                </div>
                                            </div>



                                        </div>

                                </div><!-- Overlay Post End -->
                                <div class="post post-large post-overlay hero-post h-100">

                                        <div class="post-wrap h-100">



                                            <!-- Image -->

                                            <div class="image position-relative h-100">
                                                <img style="width:100%; height: 250px;" class="img-fluid img-thumbnail" src="/img/post/news-image.jpg" alt="resurs">
                                                <div class="overlay-images"></div>
                                            </div>



                                            <!-- Category -->

                                            <a href="{{ route('category', ['cslug'=>$qyoxcategory->slug]) }}" class="category color-red-post">{{ $qyoxcategory->name }}</a>



                                            <!-- Content -->

                                            <div class="content">



                                                <!-- Title -->
                                                <h6 style="font-size: 1rem; line-height: 1.2rem;" class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h6>
                                            
                                                <!-- Meta -->

                                                <div class="meta fix">

                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>2020/5/22</span>

                                                </div>
                                            </div>



                                        </div>

                                </div><!-- Overlay Post End -->
                               @endif


                                 </div><!-- Hero Post Slider End -->
                        </div>


                    </div>

                </div><!-- Sidebar End -->



            </div><!-- Feature Post Row End -->



            <!-- Life Style Post Row Start -->

            <div class="row ">



                <div class="col-lg-8 col-12 mb-50">



                    <!-- Post Block Wrapper Start -->

                    <div class="post-block-wrapper">



                        <!-- Post Block Head Start -->

                        <div class="head life-style-head">



                            <!-- Title -->

                            <h4 class="title">@lang('home.society_cat')</h4>



                            <!-- Tab List Start -->

                            <ul class="post-block-tab-list life-style-post-tab-list nav d-none d-md-block">

                                <li><a class="active" style="color: #403b3c !important;" data-toggle="tab" href="{{ route('category',['cslug'=>$camcategory->slug]) }}">@lang('home.see_all')</a></li>



                            </ul><!-- Tab List End -->







                        </div><!-- Post Block Head End -->



                        <!-- Post Block Body Start -->

                        <div class="body pb-0">



                            <!-- Tab Content Start-->

                            <div class="tab-content">



                                <!-- Tab Pane Start-->

                                <div class="tab-pane fade show active" id="life-style-cat-1">



                                    <div class="row">



                                        <!-- Post Wrapper Start -->

                                        <div class="col-md-6 col-12 mb-20">

                                            @if($cemiyyetve != null)

                                                @foreach($cemiyyetve as $k => $cemiyyet)

                                                    @if($k == 2)

                                                        @break

                                                    @endif

                                                    <div class="post feature-post post-separator-border">

                                                        <div class="post-wrap">



                                                            <!-- Image -->

                                                            <a class="image position-relative" href="{{ route('news', ['nslug'=>$cemiyyet->slug,'cslug'=>$camcategory->slug]) }}"><img src="/images/news/{{ $cemiyyet->img }}" alt="{{ $cemiyyet->title }}"></a>



                                                            <!-- Content -->

                                                            <div class="content">



                                                                <!-- Title -->

                                                                <h4 class="title"><a href="{{ route('news', ['nslug'=>$cemiyyet->slug,'cslug'=>$camcategory->slug]) }}">{{ $cemiyyet->title }}</a></h4>



                                                                <!-- Meta -->

                                                                <div class="meta fix">

                                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ $cemiyyet->author }}</a>

                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $cemiyyet->created_at->format('Y-m-d') }}</span>

                                                                </div>



                                                                <!-- Description -->

                                                                <p>                                    {!!\Illuminate\Support\Str::words($cemiyyet->short_description, 50,'...' )!!}





                                                            </div>



                                                        </div>

                                                    </div><!-- Post End -->



                                                @endforeach

                                            @else

                                                <div class="post feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h4 class="title"><a href="#">"Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                                <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>

                                                            </div>



                                                            <!-- Description -->

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>



                                                        </div>



                                                    </div>

                                                </div><!-- Post End -->

                                                <div class="post feature-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h4 class="title"><a href="#">"Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h4>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                                <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>

                                                            </div>



                                                            <!-- Description -->

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>



                                                        </div>



                                                    </div>

                                                </div><!-- Post End -->

                                            @endif

                                        </div><!-- Post Wrapper End -->



                                        <!-- Small Post Wrapper Start -->

                                        <div class="col-md-6 col-12 mb-20">



                                            @if($cemiyyetve != null && !empty($cemiyyetve[2]))

                                                @foreach($cemiyyetve as $k => $cemiyyet)

                                                    @if($k > 1)



                                                        <div class="post post-small post-list life-style-post post-separator-border">

                                                            <div class="post-wrap">



                                                                <!-- Image -->

                                                                <a class="image" href="{{ route('news', ['nslug'=>$cemiyyet->slug,'cslug'=>$camcategory->slug]) }}"><img src="/images/news/{{ $cemiyyet->img }}" alt="{{ $cemiyyet->title }}"></a>



                                                                <!-- Content -->

                                                                <div class="content">



                                                                    <!-- Title -->

                                                                    <h5 class="title"><a href="{{ route('news', ['nslug'=>$cemiyyet->slug,'cslug'=>$camcategory->slug]) }}">{{ $cemiyyet->title }}</a></h5>



                                                                    <!-- Meta -->

                                                                    <div class="meta fix">

                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $cemiyyet->created_at->format('Y-m-d') }}</span>

                                                                    </div>



                                                                </div>



                                                            </div>

                                                        </div><!-- Small Post End -->



                                                    @endif

                                                @endforeach

                                            @else

                                            <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="//img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->



                                                <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->



                                                <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->



                                                <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->

                                                <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->



                                                <!-- Small Post Start -->

                                                <div class="post post-small post-list life-style-post post-separator-border">

                                                    <div class="post-wrap">



                                                        <!-- Image -->

                                                        <a class="image" href="#"><img src="/img/post/news-image.jpg" alt="post"></a>



                                                        <!-- Content -->

                                                        <div class="content">



                                                            <!-- Title -->

                                                            <h5 class="title"><a href="#">Resurs Analitik İnformasiya mərkəzi yeni saytını təqdim etdi</a></h5>



                                                            <!-- Meta -->

                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2019</span>

                                                            </div>



                                                        </div>



                                                    </div>

                                                </div><!-- Small Post End -->

                                            @endif

                                        </div><!-- Small Post Wrapper End -->



                                    </div>



                                </div><!-- Tab Pane End-->



                            </div><!-- Tab Content End-->



                        </div><!-- Post Block Body End -->



                    </div><!-- Post Block Wrapper End -->



                </div>



                <!-- Sidebar Start -->

                <div class="col-lg-4 col-12 mb-50">

                    <div class="row">



                        <!-- Single Sidebar -->

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">



                            <!-- Sidebar Block Wrapper -->

                            <div class="sidebar-block-wrapper">



                                <!-- Sidebar Block Head Start -->

                                <div class="head life-style-head">



                                    <!-- Title -->

                                    <a href="{{ route('category', ['cslug' => $millimenevi->slug]) }}"><h4 class="title">@lang('home.milli')</h4></a>



                                </div><!-- Sidebar Block Head End -->







                            </div>



                        </div>
                        <!-- <div class="single-sidebar col-lg-12 col-md-6 col-12">
                        <p class="h3 text-center text-info">Facebook</p>

                        <div class="fb-page" data-href="https://www.facebook.com/resurs90.00/" data-tabs="timeline" data-width="350" data-height="450" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/resurs90.00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/resurs90.00/">Resurs Analitik  İnformasiya Mərkəzi</a></blockquote></div>
                        </div> -->

                        <!-- Single Sidebar -->

                        @if(!$ads->isEmpty())

                            @isset($ads[3])

                                {!! $ads[3]->description !!}

                            @endisset

                        @else

                            <!-- Single Sidebar -->

                                <div class="single-sidebar col-lg-12 col-md-6 col-12">

                                    <!-- Sidebar Banner -->

                                    <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                                </div>

                        @endif

                        <!-- Single Sidebar dahilerden kelamlar-->
                        @if($dahilerdenkelamlar != null)

                            @foreach($dahilerdenkelamlar as $dahilerdenkelam)
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <div class="card">
                            <img src="/images/news/{{ $dahilerdenkelam->img }}" class="card-img-top" alt="{{ $dahilerdenkelam->img }}">
                            <div class="card-body">
                                <h3 class="card-title text-center"><a href="{{ route('category', ['cslug'=>$dahcategory->slug]) }}">{{ $dahcategory->name }}</a></h3>
                                <p class="card-text">{{ $dahilerdenkelam->title }}</p>
                                <a href="{{ route('news',['nslug'=>$dahilerdenkelam->slug,'cslug'=>$dahcategory->slug]) }}" class="btn btn-primary">@lang('home.go_to')</a>
                            </div>
                            </div>
                            
                            

                        </div>
                        @endforeach
                        @else
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <div class="card">
                            <img src="https://scx2.b-cdn.net/gfx/news/hires/2019/2-nature.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-center">Dahilərdən Kəlamlar</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Xəbərə Keçid</a>
                            </div>
                            </div>
                            
                            

                        </div>
                        @endif

                            <!-- Single Sidebar konulluler-->
                            @if($konulluler != null)

                                @foreach($konulluler as $konullu)
                                <div class="single-sidebar col-lg-12 col-md-6 col-12">

                                <div class="card">
                                <img src="/images/news/{{ $konullu->img }}" class="card-img-top" alt="{{ $konullu->img }}">
                                <div class="card-body">
                                    <h3 class="card-title text-center"><a href="{{ route('category', ['cslug'=>$koncategory->slug]) }}">{{ $koncategory->name }}</a></h3>
                                    <p class="card-text">{{ $konullu->title }}</p>
                                    <a href="{{ route('news',['nslug'=>$konullu->slug,'cslug'=>$koncategory->slug]) }}" class="btn btn-primary">@lang('home.go_to')</a>
                                </div>
                                </div>



                                </div>
                                @endforeach
                                @else
                                <div class="single-sidebar col-lg-12 col-md-6 col-12">

                                <div class="card">
                                <img src="https://scx2.b-cdn.net/gfx/news/hires/2019/2-nature.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Könüllülər</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">@lang('home.go_to')</a>
                                </div>
                                </div>



                                </div>
                                @endif
                        

                </div><!-- Sidebar End -->



            </div><!-- Life Style Post Row End -->





            <!-- Banner Row Start -->
                
            <div class="row mb-4">

                    <div class="col-lg-7 col-12">

                       <h3 class="text-center">
                            <a href="https://www.youtube.com/results?search_query=resurs+informasiya+merkezi" target="_blank" class="post-middle-banner">
                                <span style="color: red;"><i class="fab fa-youtube"></i> YouTube</span>
                                <p>@lang('home.youtube')</p>
                            </a>
                       </h3>

                    </div>

            </div><!-- Banner Row End -->


            <!-- Youtube Video Row Start -->

            <div class="row">



                <!-- Video Play List Start-->

                <div class="col-lg-8 col-12 mb-50">
                <iframe width="750" height="500" class="video-main-page" src="https://www.youtube.com/embed/videoseries?list=PL51vYNAQAZuoewcK2EUmm-9vqugI_0WC-" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <!-- Video Play List End-->


                <div class="single-sidebar col-lg-4 col-md-6 col-12">



                            <!-- Sidebar Block Wrapper -->

                            <div class="sidebar-block-wrapper">



                                <!-- Sidebar Block Head Start -->

                                <div class="head video-head">



                                    <!-- Title -->

                                    <h4 class="title">@lang('home.news_navigation')</h4>



                                </div><!-- Sidebar Block Head End -->



                                <!-- Sidebar Block Body Start -->

                                <div class="body">



                                    <ul class="sidebar-category video-category">

                                        @foreach($categories as $category)

                                            <li><a href="{{ route('category',['cslug'=>$category->slug]) }}">{{ $category->name }}</a></li>

                                        @endforeach

                                    </ul>



                                </div><!-- Sidebar Block Body End -->



                            </div>



                </div>

                <!-- Facebook start -->
                
                <div class="col-lg-8 col-12 mb-50">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="fb-page" data-href="https://www.facebook.com/resurs90.00/" data-tabs="timeline" data-width="350" data-height="450" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/resurs90.00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/resurs90.00/">Resurs Analitik  İnformasiya Mərkəzi</a></blockquote></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="fb-iframe">
                                <span>
                                    <img style="width: 200px;" src="../../../../public/img/facebook-iframe-img.png" alt="">
                                </span>
                                <h5>@lang('home.facebook_text')<a href="https://www.facebook.com/resurs90.00/" target="_blank"> Resurs Analitik İnformasiya Mərkəzi.</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facebook end -->


                <!-- Sidebar Start -->

                <div class="col-lg-4 col-12 mb-50">

                    <div class="row">



                        <!-- Single Sidebar -->

                        <!-- burada 1 -->



                        <!-- Single Sidebar -->

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">



                            <div class="sidebar-subscribe">

                                <h4>@lang('home.subscribe_header')</h4>

                                <p>@lang('home.subscribe_text')</p>

                                <!-- Newsletter Form -->

                                @include('layouts.partials.others.subscriber')

                            </div>



                        </div>



                    </div>

                </div>
                
                <!-- Sidebar End -->



            </div><!-- Youtube Video Banner Row End -->



            <!-- Technology, Fashion & Other Post Row Start -->

            <div class="row">            



            </div>



        </div>

    </div><!-- Post Section End -->

@endsection

