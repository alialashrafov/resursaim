@extends('layouts.master')

@section('title', 'Resurs Informasi Mərkəzi - Əlaqə')

@section('content')

    <!-- Post Header Section Start -->

    <div class="post-header-section section mt-30 mb-30">

        <div class="container">

            <div class="row row-1">



                <!-- Page Banner Start -->   

                <div class="col-12">

                    <div class="post-header" style="background-image: url(/images/news/{{ $newis->img }}); height: 400px;">
                        <div class="overlay-images overlay-images-category"></div>



                        <!-- Title -->

                        <h3 class="title position-relative">{{ $newss->title }}</h3>



                        <!-- Meta -->

                        <div class="meta fix position-relative">
                            <div>
                                <a href="#" class="meta-item category politic">{{ $category->name }}</a>

                                <a href="#" class="meta-item author">
                                    <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="post author">{{ $newis->author }}
                                </a>

                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $newis->created_at }}</span>
                            </div>

                            <div>
                                <a href="#" class="meta-item comments"><i class="fa fa-comments"></i>({{ $say }})</a>

                            </div>                                                      
                        </div>



                    </div>

                </div><!-- Post Header Section End -->



            </div>

        </div>

    </div><!-- Page Banner Section End -->



    <!-- Post Section Start -->

    <div class="post-section section">

        <div class="container">



            <!-- Feature Post Row Start -->

            <div class="row">



                <div class="col-lg-8 col-12 mb-50">



                    <!-- Post Block Wrapper Start -->

                    <div class="post-block-wrapper mb-50">



                        <!-- Post Block Body Start -->

                        <div class="body">

                            <div class="row">



                                <div class="col-12">



                                    <!-- Single Post Start -->

                                    <div class="single-post">

                                        <div class="post-wrap">



                                            <!-- Content -->

                                            <div class="content">

                                                {!! $newss->description !!}

                                            </div>





                                        </div>

                                    </div><!-- Single Post End -->



                                </div>



                            </div>

                        </div><!-- Post Block Body End -->



                    </div><!-- Post Block Wrapper End -->
                    @if($comments != null)
                    <!-- Kommentler ucun bolme start -->
                    @foreach($comments as $comment)
                    <div class="post-block-wrapper">

                        <div class="body">
                       
                        <div class="post-comment-form comments">
                        
                            <div class="row">
                         
                                <div class="col-md-4 col-6">
                                    <div>
                                        <div class="mb-2">
                                            <i class="far fa-user"></i><span>{{$comment->name}}</span>
                                        </div>  
                                        <div class="mb-2">
                                            <i class="far fa-envelope"></i><span>{{$comment->email}}</span>
                                        </div>                                      
                                        <div class="mb-2">
                                            <i class="fas fa-globe"></i><span><a href="#" target="_blank">{{$comment->site}}</a></span>
                                        </div>                                                                          
                                    </div>                                    
                                </div>
                               
                                <div class="col-md-8 col-6">
                                    <div style="border: 1px solid #f1f1f1; padding: 10px 15px;">
                                        <p>{!!\Illuminate\Support\Str::words($comment->message, 25,'...' )!!}</p>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                       
                        </div>
                    </div>
                    @endforeach
                     <!-- Kommentler ucun bolme start -->
                    @endif

                    <!-- Post Block Wrapper Start -->

                    <div class="post-block-wrapper mt-5">



                        <!-- Post Block Head Start -->

                        <div class="head">



                            <!-- Title -->

                            <h4 class="title">@lang('home.write_comment')</h4>



                        </div><!-- Post Block Head End -->



                        <!-- Post Block Body Start -->

                        <div class="body">



                            <div class="post-comment-form">

                                <form action="{{ route('comments', $newss->id) }}" class="row">

                                    @csrf

                                    <div class="col-md-6 col-12 mb-20">

                                        <label for="name">@lang('home.name') <sup>*</sup></label>

                                        <input name="name" type="text" id="name">

                                    </div>



                                    <div class="col-md-6 col-12 mb-20">

                                        <label for="email">@lang('home.email') <sup>*</sup></label>

                                        <input name="email" type="email" id="email">

                                    </div>



                                    <div class="col-12 mb-20">

                                        <label for="website">@lang('home.website') <sup>*</sup></label>

                                        <input name="site" type="text" id="website">

                                    </div>



                                    <div class="col-12 mb-20">

                                        <label for="message">@lang('home.message') <sup>*</sup></label>

                                        <textarea name="message" id="message"></textarea>

                                    </div>



                                    <div class="col-12">

                                        <input type="submit" value="@lang('home.send')">

                                    </div>



                                </form>

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

