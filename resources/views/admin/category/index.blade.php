@extends('admin.layouts.master')

@section('title','Resurs - Kateqoriya Bölməsi')

@section('content')


    <main id="app-main" class="app-main in">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <!-- DOM dataTable -->
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Kateqoriyalar bölməsi</h4>
                                <a href="{{ route('admin.category.create') }}"><button type="button" class="btn pull-right rounded mw-md btn-primary">Kateqoriya Yarat</button></a>

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
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 255px;">Ad</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 122px;">Sıra</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 60px;">Edit</th>
                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 60px;">Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr><th rowspan="1" colspan="1">Id</th>
                                                        <th rowspan="1" colspan="1">Ad</th>
                                                        <th rowspan="1" colspan="1">Sıra</th>
                                                        <th rowspan="1" colspan="1">Edit</th>
                                                        <th rowspan="1" colspan="1">Delete</th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    @foreach($categorys as $k => $category)
                                                        @if((($k % 2) == 1))
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $category->id }}</td>
                                                                <td class="">{{ $category->name }}</td>
                                                                <td>{{ $category->sira }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.category.update', ['id' => $category->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('admin.category.delete', $category->id) }}">
                                                                        <i class="fa fa-remove" aria-hidden="true">Sil</i>
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @else
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{ $category->id }}</td>
                                                                <td class="">{{ $category->name }}</td>
                                                                <td>{{ $category->sira }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.category.update', ['id' => $category->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i>Düzəliş
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('admin.category.delete', $category->id) }}">
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