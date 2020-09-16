@extends('admin.layouts.master')

@section('title','Resurs - Reklam Bölməsi')

@section('content')
    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <!-- DOM dataTable -->
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Reklamlar bölməsi</h4>
                            </header><!-- .widget-header -->
                            @if (Session::has('mesaj'))
                                <div class="alert alert-{{ Session::get('mesaj_tip') }} alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ Session::get('mesaj') }}</strong>
                                </div>
                            @endif
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <div id="default-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="default-datatable" data-plugin="DataTable" class="table table-striped dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="default-datatable_info" style="width: 100%;">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 169px;" aria-sort="ascending">Id</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 255px;">Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 122px;">Text</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 60px;">Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr><th rowspan="1" colspan="1">Id</th>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Text</th>
                                                        <th rowspan="1" colspan="1">Edit</th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    @foreach($ads as $k => $ad)
                                                        @if((($k % 2) == 1))
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $ad->id }}</td>
                                                                <td class="">{{ $ad->name }}</td>
                                                                <td>{{ substr($ad->description, 0, 100) }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.ads.edit', $ad->id) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>


                                                            </tr>
                                                        @else
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{ $ad->id }}</td>
                                                                <td class="">{{ $ad->name }}</td>
                                                                <td>{{ substr($ad->description, 0, 100) }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.ads.edit', $ad->id) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach




                                                    </tbody>
                                                </table>
                                            </div></div>

                                    </div>
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section><!-- .app-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
        <div class="wrap p-t-0">
            <footer class="app-footer">
                <div class="clearfix">
                    <div class="copyright pull-left">Copyright ResursAim 2020 ©</div>
                </div>
            </footer>
        </div>
        <!-- /#app-footer -->
    </main>
@endsection

@section('footer')



@endsection