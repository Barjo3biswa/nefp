<div class="pcoded-inner-navbar main-menu">

    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="active">
            <a href="{{route('dashboard')}}">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="pcoded-hasmenu">
            <a href="{{route('application',[Crypt::encrypt('exi')])}}">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">Exhibition</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="pcoded-hasmenu">
            <a href="{{route('application',[Crypt::encrypt('b2b')])}}">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">B2B </span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="pcoded-hasmenu">
            <a href="{{route('application',[Crypt::encrypt('b2g')])}}">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">B2G</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                <span class="pcoded-mtext"
                    data-i18n="nav.basic-components.main">Business Mtched</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>

</div>
