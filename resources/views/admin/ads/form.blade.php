@extends('admin.layouts.master')
@section('title','Resurs - Reklamların İdarə Edilmə bölməsi')
@section('content')

    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Reklam Formu</h4>
                                <a href="{{ route('admin.ads') }}"><button type="button" class="btn pull-right rounded mw-md btn-info">Geri Qayıt</button></a>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                @if (Session::has('mesaj'))
                                    <div class="alert alert-{{ Session::get('mesaj_tip') }} alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ Session::get('mesaj') }}</strong>
                                    </div>
                                @endif
                                <form enctype="multipart/form-data" action="{{ route('admin.ads.save', $entry->id) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="exampleTextInput1" class="col-sm-1 control-label">Ad</label>
                                        <div class="col-sm-11">
                                            <input type="text" name="name" value="{{ old('name', $entry->name) }}" class="form-control" id="exampleTextInput1" placeholder="Başlıq girin ...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea1" class="col-sm-1 control-label">Mətn:</label>
                                        <div class="col-sm-11">
                                            <textarea name="description" class="form-control" cols="30" rows="10">
                                                {{ old('description', $entry->description) }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn center-block btn-success">{{ $entry->id > 0 ? "Düzəliş Et" : "Yarat"}}</button>
                                        </div>
                                    </div>
                                </form>
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