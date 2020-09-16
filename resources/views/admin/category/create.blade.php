@extends('admin.layouts.master')
@section('title','Resurs - Xəbərlər Bölməsi')
@section('content')

    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="col-md-12">
                                <div class="widget">
                                    <header class="widget-header">
                                        <h4 class="widget-title">Yeni Kateqoriya</h4>

                                        <a href="{{ route('admin.category') }}">
                                            <button type="button" class="btn pull-right rounded mw-md btn-info">Geri
                                                Qayıt
                                            </button>
                                        </a>
                                    </header>
                                    <hr class="widget-separator">
                                    <div class="widget-body">

                                        <form enctype="multipart/form-data"
                                              action="{{ route('admin.category.create') }}" method="POST"
                                              class="form-horizontal">
                                            {{ csrf_field() }}

                                            <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>@dump($errors->first())</strong>
                                            </div>
                                            <div class="m-b-lg nav-tabs-horizontal">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                        <li role="presentation"
                                                            class="{{ $activeLang === $code ? "active" : "" }}">
                                                            <a href="#tab-{{ $code }}"
                                                               aria-controls="tab-{{ $code }}"
                                                               role="tab"
                                                               data-toggle="tab"
                                                               aria-expanded="true">{{ $locale['native'] }} -
                                                                ({{$locale['name']}})</a>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                                <div class="tab-content p-md">
                                                    <x-input title="Sıra:" name="sira" value="5"/>

                                                    @foreach(config('laravellocalization.supportedLocales') as $code => $locale)

                                                        <div role="tabpanel"
                                                             class="tab-pane fade {{ $activeLang === $code ? "active" : "" }} in"
                                                             id="tab-{{ $code }}">

                                                            <x-input value="title" title="Kateqoriya adı" :name="'name_'.$code"/>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <button type="submit"
                                                                            class="btn center-block btn-success">Yarat
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section><!-- #dash-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
        <div class="wrap p-t-0">
            <footer class="app-footer">
                <div class="clearfix">
                    <div class="copyright pull-left"></div>
                </div>
            </footer>
        </div>
        <!-- /#app-footer -->
    </main>

@endsection
@section('footer')

@endsection