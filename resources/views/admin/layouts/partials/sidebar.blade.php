<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="https://clipartart.com/images/admin-icon-clipart-3.jpg" alt="{{ Auth::user()->name }}"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->name }}</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Parametrlər</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">

                                <li>
                                    <a class="text-color" href="#" onclick="getElementById('logoutform').submit()">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıxış</span>
                                    </a>
                                    <form id="logoutform" action="{{ route("logout") }}" style="display: none;" method="POST">

                                        @csrf

                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">


                <li>

                    <a href="{{ route('admin.news') }}">
                        <i class="fas fa-newspaper"></i>
                    <span class="menu-text"> Xəbərlər</span>
                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.category') }}">

                        <i class="fas fa-list-ol"></i>
                    <span class="menu-text"> Kateqoriyalar</span>
                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.nc') }}">

                        <i class="fas fa-folder-open"></i>
                    <span class="menu-text"> Xəbər->Kateqoriya</span>

                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.comments') }}">

                        <i class="fas fa-comments"></i>
                    <span class="menu-text"> Rəylər</span>
                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.subscribe') }}">

                        <i class="fas fa-users"></i>
                        <span class="menu-text"> İzləyicilər</span>

                    </a>

                </li>

                <li>

                    <a href="{{ route('admin.contacts') }}">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="menu-text"> Əlaqə (form)</span>
                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.ads') }}">

                        <i class="fas fa-bullhorn"></i>
                        <span class="menu-text"> Reklamlar</span>

                    </a>
                </li>

                <li>

                    <a href="{{ route('admin.settings.update') }}">
                        <i class="fas fa-cog"></i>
                        <span class="menu-text"> Sayt Parametrləri</span>
                    </a>
                </li>


                <li class="menu-separator"><hr></li>

                <li>
                    <a target="_blank" href="/">
                        <i class="fas fa-globe"></i>
                        <span class="menu-text"> Sayta Keçid</span>
                    </a>
                </li>

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>