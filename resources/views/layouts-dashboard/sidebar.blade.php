<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('') }}" class="brand-link">
        <img src="{{asset('images/pp.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-capitalize">{{ Auth::user()->name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('')}}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul> -->
                </li>

                <!-- Bagian Akhir Umum -->


                <!-- Bagian baru Lainnya -->

                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{ route('calendar') }}" class="nav-link {{ Route::currentRouteNamed('calendar') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ Route::currentRouteNamed('artikels','add-artikels') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Artikel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('artikels') }}" class="nav-link {{ Route::currentRouteNamed('artikels') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Artikels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-artikels') }}" class="nav-link {{ Route::currentRouteNamed('add-artikels') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Artikels</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ Route::currentRouteNamed('project','add-project') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Project
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('project') }}" class="nav-link {{ Route::currentRouteNamed('project') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-project') }}" class="nav-link {{ Route::currentRouteNamed('add-project') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>