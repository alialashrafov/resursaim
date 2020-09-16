@extends('admin.layouts.master')
@section('title','Resurs - Xəbərlərin Kateqoriyaya əlavə edilmə bölməsi')
@section('content')
    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Yeni Kateqoriya</h4>
                                <a href="{{ route('admin.nc') }}"><button type="button" class="btn pull-right rounded mw-md btn-info">Geri Qayıt</button></a>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form enctype="multipart/form-data" action="{{ route('admin.nc.save', $entry->id) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    @if (session('mesaj'))
                                        <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ session('mesaj') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="select2-demo-1" class="col-sm-4 control-label">Xəbər Seç</label>
                                        <div class="col-sm-6">
                                            <select name="news_id" id="select2-demo-1" class="form-control select2-hidden-accessible" data-plugin="select2" tabindex="-1" aria-hidden="true">
                                                <option>Xəbər Seç</option>
                                            @foreach($news as $new)
                                                    <option value="{{ $new->id }}" {{ $new->id == $entry->news_id ? 'selected' : '' }}>
                                                        {{ $new->title }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div><!-- END column -->
                                    </div>

                                    <div class="form-group">
                                        <label for="select2-demo-1" class="col-sm-4 control-label">Kateqoriya Seç</label>
                                        <div class="col-sm-6">
                                            <select name="cat_id" id="select2-demo-1" class="form-control select2-hidden-accessible" data-plugin="select2" tabindex="-1" aria-hidden="true">
                                                <option>Kateqoriya Seç</option>
                                                @foreach($categorys as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $entry->cat_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div><!-- END column -->
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