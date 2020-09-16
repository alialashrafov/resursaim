@extends('admin.layouts.master')

@section('title','Resurs - Ayarlar Bölməsi')

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
                                        <h4 class="widget-title">Sayt Parametrləri</h4>

                                    </header>
                                    <hr class="widget-separator">
                                    <div class="widget-body">

                                        <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('admin.settings.updateform', ['id' => $entry->id]) }}" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>@dump($errors->first())</strong>
                                            </div>
                                            @if (session('mesaj'))
                                                <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ session('mesaj') }}</strong>
                                                </div>
                                            @endif
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
                                                    <x-input title="Facebook:" name="facebook" :value="$entry->facebook"/>
                                                    <x-input title="Twitter:" name="twitter" :value="$entry->twitter"/>
                                                    <x-input title="Youtube:" name="youtube" :value="$entry->youtube"/>
                                                    <x-input title="Google:" name="google" :value="$entry->google"/>
                                                    <x-input title="Address:" name="address" :value="$entry->address"/>
                                                    <x-input title="Email:" name="email" :value="$entry->email"/>
                                                    <x-input title="Phone:" name="phone" :value="$entry->phone"/>

                                                    <div class="form-group">
                                                        <label for="exampleTextInput1" class="col-sm-1 control-label">Şəkil:</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="logo" class="form-control">
                                                        </div>
                                                    </div>
                                                    @foreach(config('laravellocalization.supportedLocales') as $code => $locale)

                                                        <div role="tabpanel"
                                                             class="tab-pane fade {{ $activeLang === $code ? "active" : "" }} in"
                                                             id="tab-{{ $code }}">

                                                            <x-admin.ckeditor :id="'description_'.$code" title="Mətn" :value="$entry->translate($code)->description"
                                                                              :name="'description_'.$code"/>


                                                        </div>
                                                    @endforeach
                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <button type="submit"
                                                                    class="btn center-block btn-success">Düzəliş Et
                                                            </button>
                                                        </div>
                                                    </div>

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