<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="treeview {{Request::is('home') ? "active" : ""}}">
                <a href="{{ url('home') }}">
                    <i class="fa fa-dashboard"></i> 
                    <span style="margin-left:-2%;">Dashboard</span> 
                </a>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-exclamation-triangle'></i> <span>Problem</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="{{ route('problems.index') }}"><i class='fa fa-circle-o'></i>All Problems</a></li>
                    <li><a href="{{ route('problems.create') }}"><i class='fa fa-circle-o'></i>New Problem</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('changes') }}"><i class='fa fa-exchange'></i> <span>Changes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('changes.index') }}"><i class='fa fa-circle-o'></i>All Changes</a></li>
                    <li><a href="{{ route('changes.create') }}"><i class='fa fa-circle-o'></i>New Change</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gavel'></i> <span>Releases</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('releases.index') }}"><i class='fa fa-circle-o'></i>All Releases</a></li>
                    <li><a href="{{ route('releases.create') }}"><i class='fa fa-circle-o'></i>New Release</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
