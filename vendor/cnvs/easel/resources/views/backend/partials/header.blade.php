<header id="header" class="clearfix" data-current-skin="blue">
    <a href="{!! route('canvas.admin') !!}"><img src="{!! asset('vendor/canvas/assets/images/canvas-logo-white.gif') !!}" class="cl-center" style="width: 100px"></a>
    <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>
        <li class="logo">
            <a href="{!! route('canvas.admin') !!}"><img src="{!! asset('vendor/canvas/assets/images/studiow-logo-white.gif') !!}" class="cl hidden-xs" style="height: 40px"></a>
        </li>
        <li class="pull-right">
            <ul class="top-menu">
                <li id="top-search">
                    <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="hidden-xs">
                            <a href="{!! route('canvas.admin.profile.index') !!}"><i class="zmdi zmdi-account"></i> Your Profile</a>
                        </li>
                        <li class="hidden-xs">
                            <a target="_blank" href="{!! route('canvas.home') !!}"><i class="zmdi zmdi-view-web"></i> View Site</a>
                        </li>
                        <li class="hidden-xs">
                            <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{!! route('canvas.auth.logout') !!}"><i class="zmdi zmdi-power"></i> Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>


    <!-- Top Search Content -->
    <form role="form" method="GET" id="search" name="search" action="{!! route('canvas.admin.search.index') !!}">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div id="top-search-wrap">
            <div class="tsw-inner">
                <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                <input type="text" placeholder="Search" name="search">
            </div>
        </div>
    </form>
</header>