@extends('layouts.master')

@section('title', 'Resurs Informasi Mərkəzi - Əlaqə')

@section('content')

    <!-- Post Section Start -->

    <div class="post-section section mt-50">

        <div class="container">



            <!-- Feature Post Row Start -->

            <div class="row">



                <div class="col-lg-8 col-12 mb-50">



                    <!-- Post Block Wrapper Start -->

                    <div class="post-block-wrapper">

                        <div class="head feature-head category">

                            <!-- Title -->

                        <h4 class="float-none title text-body text-center">{{$forcat->name}}</h4>

                        </div>



                        <!-- Post Block Body Start -->

                        <div class="body">



                            <!-- Post Start -->

                            @if($newsz != null)

                            @foreach($newsz as $new)

                            <div class="post fashion-post post-default-list post-separator-border">

                                <div class="post-wrap">



                                    <!-- Image -->

                                    <a class="image position-relative" href="{{ route('news', ['cslug' => $category->slug,'nslug'=>$new->slug]) }}">
                                        <img class="category-post-picture w-100" src="/images/news/{{ $new->img }}" alt="post">
                                        <div class="overlay-images overlay-images-category"></div>
                                    </a>



                                    <!-- Content -->

                                    <div class="content">



                                        <!-- Title -->

                                        <h4 class="title"><a href="{{ route('news', ['cslug' => $category->slug,'nslug'=>$new->slug]) }}">{{ $new->title }}</a></h4>



                                        <!-- Meta -->

                                        <div class="meta fix mb-3">

                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ $new->author }}</a>

                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $new->created_at }}</span>

                                        </div>



                                        <!-- Description -->



                                    {!!\Illuminate\Support\Str::words($new->short_description, 15,'...' )!!}

                                        <!-- Read More -->

                                        <a href="{{ route('news', ['cslug' => $category->slug,'nslug'=>$new->slug]) }}" class="read-more">Ardını Oxu</a>



                                    </div>



                                </div>

                            </div><!-- Post End -->



                            @endforeach

                            @endif

                            <div>

                                @if($newsz != null)

                                    {{ $newsz->render() }}

                                @endif



                            </div>



                        </div><!-- Post Block Body End -->



                    </div><!-- Post Block Wrapper End -->



                </div>





                <!-- Sidebar Start -->

                <div class="col-lg-4 col-12 mb-50">

                    <div class="row">



                        <!-- Single Sidebar -->

                        @include('layouts.partials.others.follower')



                        <!-- Single Sidebar -->

                    @if(!$ads->isEmpty())

                        @isset($ads[2])

                            {!! $ads[2]->description !!}

                        @endisset

                    @else

                            <div class="single-sidebar col-lg-12 col-md-6 col-12">



                                <!-- Sidebar Banner -->

                                <a href="#" class="sidebar-banner"><img src="/img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>



                            </div>

                    @endif

                        <!-- Single Sidebar -->

                    @if(!$ads->isEmpty())

                        @isset($ads[3])

                            {!! $ads[3]->description !!}

                        @endisset

                    @else

                        <!-- Single Sidebar -->

                            <div class="single-sidebar col-lg-12 col-md-6 col-12">



                                <!-- Sidebar Banner -->

                                <a href="#" class="sidebar-banner"><img src="/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>



                            </div>

                    @endif

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

                </div><!-- Sidebar End -->



            </div><!-- Feature Post Row End -->



        </div>

    </div><!-- Post Section End -->



@endsection

