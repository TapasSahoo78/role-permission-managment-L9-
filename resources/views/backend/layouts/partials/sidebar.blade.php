<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('assets/images/icon/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="active"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                    </li>
                </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Roles
                        </span></a>
                    <ul class="collapse">
                        <li><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                </li>
                <li>
                    <a href="{{ route('admin.roles.create') }}">List Role</a>
                </li>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
