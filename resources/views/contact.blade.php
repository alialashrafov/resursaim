@extends('layouts.master')
@section('title', 'Resurs Informasi Mərkəzi - Əlaqə')
@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="page-banner" style="background-image: url(/img/bg/page-banner-fashion.jpg)">
                        <h2>@lang('home.Contact_us')</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="/">@lang('home.index')</a></li>
                            <li class="active">@lang('home.contact')</li>
                        </ol>
                    </div>
                </div><!-- Page Banner End -->

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
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@lang('home.contact_info')</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-info row">

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-home"></i>
                                    <p>{{ $settings->address }}</p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-envelope-open"></i>
                                    <p>{{ $settings->email }}</p>
                                </div>

                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-headphones"></i>
                                    <p>{{ $settings->phone }}</p>
                                </div>

                            </div>

                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@lang('home.for_contact')</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <form action="{{ route('contactable') }}">
                                @csrf
                                <div class="contact-form row">

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">@lang('home.name') <sup>*</sup></label>
                                        <input type="text" id="name" name="name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" id="email" name="email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="website">@lang('home.website') <sup>*</sup></label>
                                        <input type="text" id="website" name="website">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="message">@lang('home.message') <sup>*</sup></label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="@lang('home.send')">
                                    </div>

                                </div>
                            </form>
                            <p class="form-messege"></p>

                        </div><!-- Post Block Body End -->

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">@lang('home.find_us')</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-map-wrap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194473.43000232737!2d49.714873195590336!3d40.39450797727234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2zQmFrxLEsIEF6yZlyYmF5Y2Fu!5e0!3m2!1saz!2s!4v1580317758820!5m2!1saz!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6295413.254760055!2d45.11526547975345!3d39.60620854707072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307cd91aa21ddf%3A0xe6c9526b3e83cd08!2sAz%C9%99rbaycan!5e0!3m2!1saz!2s!4v1581402023182!5m2!1saz!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                                <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

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
                                <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

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
