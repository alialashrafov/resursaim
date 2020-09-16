@extends('admin.layouts.master')

@section('title','Resurs - Xəbərlərin kateqoriyaya əlavə edilmə Bölməsi')

@section('content')

    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <!-- DOM dataTable -->
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Xəbərlərin Kateqoriyalara əlavə edilmə bölməsi</h4>
                                <a href="{{ route('admin.nc.new') }}"><button type="button" class="btn pull-right rounded mw-md btn-primary">XK Yarat</button></a>

                            </header><!-- .widget-header -->
                            @if (session('mesaj'))
                                <div class="alert alert-{{ session('mesaj_tip') }} alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ session('mesaj') }}</strong>
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
                                                        <th class="sorting_asc" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 100px;" aria-sort="ascending">Id</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 255px;">Xəbər</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 122px;">Kateqoriya</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 60px;">Edit</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 60px;">Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr><th rowspan="1" colspan="1">Id</th>
                                                        <th rowspan="1" colspan="1">Xəbər</th>
                                                        <th rowspan="1" colspan="1">Kateqoriya</th>
                                                        <th rowspan="1" colspan="1">Edit</th>
                                                        <th rowspan="1" colspan="1">Delete</th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    @foreach($ncs as $k => $nc)
                                                        @if((($k % 2) == 1))
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $nc->id }}</td>
                                                                @if($nc->news)
                                                                <td class="">{{ $nc->news->title }}</td>
                                                                @else
                                                                <td class="">Xəbər seçilməyib</td>
                                                                @endif
                                                                @if($nc->categorys)
                                                                <td>{{ $nc->categorys->name }}</td>
                                                                @else
                                                                    <td>Kateqoriya seçilməyib</td>
                                                                @endif
                                                                    <td>
                                                                    <a href="{{ route('admin.nc.edit', $nc->id) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('admin.nc.delete', $nc->id) }}">
                                                                        <i class="fa fa-remove" aria-hidden="true">Sil</i>
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @else
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{ $nc->id }}</td>
                                                                @if($nc->news)
                                                                    <td class="">{{ $nc->news->title }}</td>
                                                                @else
                                                                    <td class="">Xəbər seçilməyib</td>
                                                                @endif
                                                                @if($nc->categorys)
                                                                    <td>{{ $nc->categorys->name }}</td>
                                                                @else
                                                                    <td>Kateqoriya seçilməyib</td>
                                                                @endif
                                                                <td>
                                                                    <a href="{{ route('admin.nc.edit', $nc->id) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('admin.nc.delete', $nc->id) }}">
                                                                        <i class="fa fa-remove" aria-hidden="true">Sil</i>
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