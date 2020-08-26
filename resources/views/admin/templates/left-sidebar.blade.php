<aside class="main-sidebar">


<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ URL::to('/assets/img/user-admin.png') }}" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->getFullName() }}</p>
            <!-- Status -->
            <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
   {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>--}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Books')}}</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="fa fa-book">
                    <a href="{{ url('/admin/book/add-new') }}"><i class="fa fa-book"></i>{{trans('greet.Add New Book')}}</a>
                </li>
                   <li> <a href="{{ URL::to('/admin/book/list') }}"><i class="fa fa-book"></i>{{trans('greet.Book List')}} </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Author')}}</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="fa fa-book" >
                    <a href="{{ URL::to('/admin/author/add-new') }}"><i class="fa fa-book"></i>{{trans('greet.Add New Author')}}</a>
                </li>
        <li>
            <a href="{{ URL::to('/admin/author/list') }}"><i class="fa fa-book"></i>{{trans('greet.Author List')}} </a>
        </li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Publishers')}}</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li class="fa fa-book"> <a href="{{ url('/admin/publisher/add-new') }}"><i class="fa fa-book"></i>{{trans('greet.Add New Publisher')}}</a></li>
                <li><a href="{{ URL::to('/admin/publisher/list') }}"><i class="fa fa-book"></i> {{trans('greet.Publisher List')}}</a></li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Members')}}</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="fa fa-book"><a href="{{ url('/admin/member/add-new') }}"><i class="fa fa-book"></i>{{trans('greet.Add New Member')}}</a></li>
               <li> <a href="{{ URL::to('/admin/member/list') }}"><i class="fa fa-book"></i> {{trans('greet.Member List')}}</a></li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Reports')}}</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('admin/report/loan') ? 'active' : '' }}">
                    <a href="{{ url('/admin/report/loan') }}">{{trans('greet.Loan')}}</a>
                </li>
                <li class="{{ Request::is('admin/report/return') ? 'active' : '' }}">
                    <a href="{{ URL::to('/admin/report/return') }}">{{trans('greet.Book Return')}}</a>
                </li>
                <li class="{{ Request::is('admin/report/balance') ? 'active' : '' }}">
                    <a href="{{ URL::to('/admin/report/balance') }}">{{trans('greet.Balance Quantity')}}</a>
                </li>
            </ul>
        </li>
        <li >
            <a href="{{ url('/') }}">
                <i class="fa fa-pie-chart"></i>
                <span>{{trans('greet.Library')}}</span>

            </a>

        </li>

    </ul>
</section>
</aside>