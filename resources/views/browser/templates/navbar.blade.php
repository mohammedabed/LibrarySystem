<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>
        <div class="ologo">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::to('/') }}/assets/img/logo.png" class="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/list') }}"><i class="fa fa-book"></i> {{trans('greet.Library')}}</a>
                </li>
                <li><a href="{{ url('/admin') }}"><i class="fa fa-language"></i> {{trans('greet.Admin')}}</a></li>
                <li>
                    <a href="{{ url('/about') }}"><i class="fa fa-building-o"></i>{{trans('greet.about us')}}</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('borrow-books') ? 'active' : '' }}">
                    <a href="{{ url('/').'/borrow-books' }}">
                        <i class="fa fa-shopping-cart"></i> <span class="text-primary">{{trans('greet.Borrow')}}</span></a>
                </li>
                @if(Auth::guest())
                    <li><a href="{{ url('/').'/auth/register' }}">{{trans('greet.Register')}}</a></li>
                    <li class="{{ Request::is('auth/login') ? 'active' : '' }}">
                        <a href="{{ url('/').'/auth/login' }}">{{trans('greet.login')}}</a>
                    </li>
                @else

                    <li class="{{ Request::is('return-books') ? 'active' : '' }}">
                        <a href="{{ url('/').'/return-books' }}"><i class="fa fa-keyboard-o "></i> {{trans('greet.Return')}}</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                         aria-expanded="false"><i class="fa fa-user text-info"></i> {{ Auth::user()->getFullName() }} <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li class="dropdown-header">{{trans('greet.Account')}}</li>
                              <li><a href="{{ url('/').'/my-profile' }}">{{trans('greet.Profile')}}</a></li>
                              <li><a href="{{ url('/').'/change-password' }}">{{trans('greet.chpass')}}</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="{{ url('/') .'/auth/logout' }}">{{trans('greet.Log out')}}</a></li>
                          </ul>
                  </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>