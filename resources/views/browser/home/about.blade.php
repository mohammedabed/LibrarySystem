<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>UCAS Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/bootstrap.css" media="all">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/shop.css" media="all">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/style.css" media="all">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/font-awesome.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/footer1.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/animate.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/web/css/jquery.desoslide.css">


    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="home">
    <!-- header -->
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="main-nav">
            <div class="container">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Chronicle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="ologo">


                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::to('/') }}/assets/img/logo.png" class="logo"></a>


                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                    <ul class="nav navbar-nav  ">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ url('/list') }}"><i class="fa fa-book"></i> {{trans('greet.Library')}}</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}"><i class="fa fa-building-o"></i>{{trans('greet.about us')}}</a>
                        </li>
                        <li><a href="{{ url('/admin') }}"><i class="fa fa-language"></i> {{trans('greet.Admin')}}</a></li>


                        <li class="{{ Request::is('borrow-books') ? 'active' : '' }}">
                            <a href="{{ url('/').'/borrow-books' }}">
                                <i class="fa fa-shopping-cart"></i> <span class="text-primary">{{trans('greet.Borrow')}}</span></a>
                        </li>
                        @if(Auth::guest())
                            <li><a href="{{ url('/').'/auth/register' }}">{{trans('greet.Register')}}</a></li>
                            <li class="{{ Request::is('auth/login') ? 'active' : '' }}">
                                <a href="{{ url('/').'/auth/login' }}">{{trans('greet.Login')}}</a>
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
                    <!-- search-bar -->


                </div><!--/.n
                            <!-- //shopping cart ends here -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </div>
        <!-- /.container -->
</div>
</nav>
<!-- //navbar ends here -->
<!-- banner -->
<div class="banner-bg-agileits">
    <!-- banner-text -->
    <div class="banner-text">
        <div class="container">
            <p class="b-txt">the</p>
            <h2 class="title">
                {{trans('greet.Library')}}
            </h2>
            <ul class="banner-txt">
                <li>{{trans('greet.ishare')}}</li>
                <li> {{trans('greet.iexplore')}} </li>
                <li>{{trans('greet.iamplify')}}</li>
            </ul>
        </div>
    </div>
    <!-- //banner-text -->
</div>
<!-- //banner -->
<!-- about -->
<div class="about-sec section" id="about">
    <div class="container">
        <!-- about-left-grid -->
        <div class="col-md-7 about-left-grid">
            <div class="inner-about2">
                <h4>{{trans('greet.tag1')}}</h4>
                <p>{{trans('greet.tag2')}}</p>
                <h5>{{trans('greet.the library catalogue')}}</h5>
                <ul class="about-list">
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.International Collections')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.ebooks')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.Manuscripts')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.scientific and Technical Information')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.Comic Books')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.Cartography')}}</li>
                    <li>
                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{trans('greet.Journals')}}</li>

                </ul>
                <a href="{{ url('/list') }}">{{trans('greet.view more')}}</a>
            </div>
            <!-- about left bottom - services -->
            <div class="principles-grids principles-grids1">
                <div class="abt-btm agileits w3layouts aos-init aos-animate">
                    <div class="col-md-6 col-sm-6 agileits elite-services1 w3layouts bottom-gds" data-aos="fade-up">
                        <div class="bott-img agileits w3layouts">
                            <div class="icon-holder agileits w3layouts">
                                <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                            </div>
                            <h4 class="mission agileits w3layouts">{{trans('greet.Return')}}</h4>
                            <div class="description agileits w3layouts">
                                <a href="{{ url('/list') }}">{{trans('greet.Read More')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 agileits elite-services2 w3layouts bottom-gds" data-aos="fade-down">
                        <div class="bott-img bott-img1 agileits w3layouts">
                            <div class="icon-holder agileits w3layouts">
                                <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                            </div>
                            <h4 class="mission agileits w3layouts">{{trans('greet.Borrow')}}</h4>
                            <div class="description agileits w3layouts">
                                <a href="{{ url('/list') }}">{{trans('greet.Read More')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //about left bottom - services ends here -->
        </div>
        <!-- //about-left-grid ends here-->
        <!-- about-right-grid -->
        <div class="col-md-5 about-right-grid"></div>
        <!-- //about-right-grid ends here -->
        <div class="clearfix"></div>
    </div>
</div>
<!-- //about ends here -->
<!-- about bottom -->
<div class="about-bottom section">
    <div class="container-fluid">
        <h4 class="rad-txt">
            <span class="abtxt1">{{trans('greet.wonderful')}}</span>
            <span class="abtext"> {{trans('greet.world of reading')}}</span>
        </h4>
        <!-- about-bottom grid1 -->
        <div class="col-md-6 about-bottom-right">
            <p class="abt-p">Etiam massa quam, efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus suscipit ante,
                sit efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus suscipit an amet pulvinar
                risus.
            </p>
            <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.e-books')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.magazines')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.Fiction')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.audio books')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls service2">
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.Journals')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.e-library')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.magazines')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ab1">
                    <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                        <span class="fa fa-book" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                        <h5>{{trans('greet.Comic Books')}}</h5>
                        <p>loremipsum is a dummy text</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //about-bottom grid1 ends here -->
        <div class="col-md-6 home-about2">
            <!-- about-bottom grid2 -->
            <div class="col-md-6 col-sm-6 col-xs-6 bg-right"></div>
            <!-- //about-bottom grid2 ends here -->
            <!-- about-bottom grid3 -->
            <div class="col-md-6 col-sm-6 col-xs-6 w3ls-section  stats">
                <div class="stats-aboutinfo services-main">
                    <div class="agileits_w3layouts-stats-grids text-center">
                        <div class="stats-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>{{trans('greet.volumes')}}</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='221073' data-delay='.5' data-increment="300">221073</div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="agileits_w3layouts-stats-grids text-center">
                        <div class="stats-icon">
                            <span class="fa fa-university" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>{{trans('greet.branches')}}</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="50">980</div>

                        </div>
                        <div class="clearfix"></div>


                    </div>
                    <div class="agileits_w3layouts-stats-grids text-center">
                        <div class="stats-icon">
                            <span class="fa fa-laptop" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>{{trans('greet.e-books')}}</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9800' data-delay='.5' data-increment="50">9800</div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="agileits_w3layouts-stats-grids text-center">
                        <div class="stats-icon">
                            <span class="fa fa-users" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>{{trans('greet.visitors')}}</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='123623' data-delay='.5' data-increment="300">123623</div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //about-bottom grid3 ends here -->
        <!-- //Numscroller -->
        <div class="clearfix"></div>
    </div>
    <!-- //about container ends here-->
</div>
<!--//about bottom ends here-->
<!-- team -->
<div id="team" class="team section">
    <div class="team-container">
        <div class="team-row">
            <!-- team grid1 -->
            <div class="col-md-5 team-grid-left">
                <!-- team individual grid -->
                <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                    <div class="team-effect">
                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/t3.jpg" alt="img" class="img-responsive">
                        <div class="social-icon">
                            <a href="#" class="social-button twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-button facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-button google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h4>John Smith</h4>
                        <span>Designation</span>
                        <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>

                    </div>
                </div>
                <!-- //team individual grid -->
                <!-- team individual grid -->
                <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                    <div class="team-text">
                        <h4>Thomson Doe</h4>
                        <span>Designation</span>
                        <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                    </div>
                    <div class="team-effect">
                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/t1.jpg" alt="img" class="img-responsive">
                        <div class="social-icon">
                            <a href="#" class="social-button twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-button facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-button google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- //team individual grid -->
                </div>
            </div>
            <!-- //team-grid1 ends here-->
            <!--team-grid2 -->
            <div class="col-md-2 col-sm-2 team-mid-txt text-center">
                <span>our</span>
                <h5>t</h5>
                <h5>e</h5>
                <h5>a</h5>
                <h5>m</h5>
            </div>
            <!--//team-grid2 ends here-->
            <!-- team grid3 -->
            <!-- team individual grid -->
            <div class="col-md-5 team-grid-right">
                <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                    <div class="team-text">
                        <h4>Smith Kevin</h4>
                        <span>Designation</span>
                        <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                    </div>
                    <div class="team-effect">
                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/t2.jpg" alt="img" class="img-responsive">
                        <div class="social-icon">
                            <a href="#" class="social-button twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-button facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-button google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //team individual grid -->
                <!-- team individual grid -->
                <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                    <div class="team-effect">
                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/t4.jpg" alt="img" class="img-responsive">
                        <div class="social-icon">
                            <a href="#" class="social-button twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-button facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-button google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h4>Laura Hill</h4>
                        <span>Designation</span>
                        <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                    </div>
                </div>
                <!-- //team individual grid -->
                <div class="clearfix"> </div>
            </div>
            <!-- //team grid3 -->
            <div class="clearfix"> </div>
        </div>
        <!-- //team-row ends here -->
    </div>
    <!-- // team container ends here -->
</div>
<!-- //team -->
<!--testimonials -->
<div class="reviews section" id="testimonials">
    <div class="container">
        <h4 class="rad-txt">
            <span class="abtxt1">{{trans('greet.visitors')}}</span>
            <span class="abtext">{{trans('greet.testimonials')}}</span>
        </h4>
        <div id="Carousel" class="slide carousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids">
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>convallis felis</h6>
                                    <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                    <h5>Davidson</h5>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c3.jpg" alt="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids t2">
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c2.jpg" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>Cras rutrum</h6>
                                    <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                    <h5>Clifford</h5>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids">
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>felis mattis</h6>
                                    <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                    <h5>Mercurio</h5>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c4.jpg" alt="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids t2">
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c1.jpg" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>Cras rutrum</h6>
                                    <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                    <h5>Clifford</h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!--.row-->
                </div>
                <!--.item-->
                <div class="item">
                    <div class="row">
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids">
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>convallis felis</h6>
                                    <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                    <h5>Davidson</h5>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c3.jpg" alt="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6 testi-main">
                            <div class="testi-grids t2">
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c2.jpg" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>Cras rutrum</h6>
                                    <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                    <h5>Clifford</h5>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids">
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>felis mattis</h6>
                                    <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                    <h5>Mercurio</h5>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c4.jpg" alt="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6  testi-main">
                            <div class="testi-grids t2">
                                <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                    <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c1.jpg" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                    <h6>Cras rutrum</h6>
                                    <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                    <h5>Clifford</h5>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!--.row-->
                </div>
            </div>
            <!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
        </div>
        <!--.Carousel-->
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //testimonials-->
    <!-- gallery -->
    <div id="section_demo" class="section">
        <div class="container">
            <h4 class="rad-txt">
                <span class="abtxt1">the library</span>
                <span class="abtext">gallery</span>
            </h4>
            <div class="row">
                <!-- Result 1 -->
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div id="slideshow_1_thumbs_1" class="col-lg-2 col-md-2">
                            <ul class="slideshow1_thumbs desoslide-thumbs-vertical list-inline text-center">
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l3.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt3.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l2.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt2.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l5.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt5.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l4.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt4.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="slideshow1" class="col-lg-8 col-md-8"><div class="desoslide-wrapper"><img alt="chronicle_image" class="img-responsive animated fadeIn" src="{{ URL::to('/') }}/assets/theme/dist/web/images/l1.jpg"><div class="desoslide-overlay" style="left: 0px; top: 394px; width: 750px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; opacity: 0.7;"><span class="desoslide-caption-title">Library Gallery</span>
                                    <div class="desoslide-controls-wrapper"><a class="desoslide-controls prev" href="#prev"></a><a class="desoslide-controls pause" href="#pause" style="display: none;"></a><a class="desoslide-controls play" href="#play"></a><a class="desoslide-controls next" href="#next"></a></div></div></div></div>
                        <div id="slideshow_1_thumbs_2" class="col-lg-2 col-md-2">
                            <ul class="slideshow1_thumbs desoslide-thumbs-vertical list-inline">
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l1.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt1.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l6.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt6.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l7.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt7.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/') }}/assets/theme/dist/web/images/l8.jpg">
                                        <img src="{{ URL::to('/') }}/assets/theme/dist/web/images/lt8.jpg" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </div>
    </div>
    <!-- //gallery -->
    <!-- contact -->
    <div class="section contact" id="contact">
        <div class="container">
            <h4 class="rad-txt text-center">
                <span class="abtxt1">contact</span>
                <span class="abtext">us</span>
            </h4>
            <div class="contact-form">
                <div class="col-md-7">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5>send us a note</h5>
                        <form action="#" class="form_w3layouts" method="post">
                            <input type="text" placeholder="First Name" required="">
                            <input type="text" placeholder="Last Name" required="">

                            <input class="email" type="email" placeholder="Email" required="">
                            <textarea placeholder="Message" required=""></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact map grid -->
                <div class="col-md-5 map contact-right">
                    <div class="contact-top1">
                        <h5>get directions</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <!--//contact map grid ends here-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--testimonials -->
    <div class="reviews section" id="testimonials">
        <div class="container">
            <h4 class="rad-txt">
                <span class="abtxt1">{{trans('greet.visitors')}}</span>
                <span class="abtext">{{trans('greet.testimonials')}}</span>
            </h4>
            <div id="Carousel" class="slide carousel">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>convallis felis</h6>
                                        <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                        <h5>Davidson</h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c3.jpg" alt="">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c2.jpg" alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>Cras rutrum</h6>
                                        <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                        <h5>Clifford</h5>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>felis mattis</h6>
                                        <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                        <h5>Mercurio</h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c4.jpg" alt="">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c1.jpg" alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>Cras rutrum</h6>
                                        <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                        <h5>Clifford</h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>convallis felis</h6>
                                        <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                        <h5>Davidson</h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c3.jpg" alt="">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6 testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c2.jpg" alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>Cras rutrum</h6>
                                        <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                        <h5>Clifford</h5>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>felis mattis</h6>
                                        <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                        <h5>Mercurio</h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c4.jpg" alt="">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/assets/theme/dist/web/images/c1.jpg" alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6>Cras rutrum</h6>
                                        <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                        <h5>Clifford</h5>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                </div>
                <!--.carousel-inner-->
                <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
            </div>
            <!--.Carousel-->
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //testimonials-->


    <!-- //newsletter -->
    <!-- footer -->
    <div class="w3_footerv1 section">
        <div class="container">
            <div class="w3_footerv1_grids">
                <div class="col-md-3 col-sm-6 col-xs-6 w3_footerv1_grid">
                    <h3>{{trans('greet.Contact')}}</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                            <span>{{trans('greet.palestine')}}</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6  w3_footerv1_grid">
                    <h3>{{trans('greet.Information')}}</h3>
                    <ul class="info">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">management team</a></li>
                        <li><a href="#">self publish</a></li>
                        <li><a href="#">free app's</a></li>
                        <li><a href="#">get help</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6  w3_footerv1_grid">
                    <h3>{{trans('greet.Category')}}</h3>
                    <ul class="info">
                        <li><a href="shop.html">{{trans('greet.e-books')}}</a></li>
                        <li><a href="shop.html">{{trans('greet.e-books')}} </a></li>
                        <li><a href="shop.html">{{trans('greet.e-books')}}</a></li>
                        <li><a href="shop.html">{{trans('greet.e-books')}}</a></li>
                        <li><a href="shop.html">{{trans('greet.e-books')}}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 w3_footerv1_grid">
                    <h3>{{trans('greet.trending now')}}</h3>
                    <ul class="info">
                        <li><a href="shop.html">{{trans('greet.audio books')}}</a></li>
                        <li><a href="shop.html">{{trans('greet.e-books')}}</a></li>
                    </ul>
                    <h4>{{trans('greet.Follow Us')}}</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                            <li><a href="#" class="google"> </a></li>
                            <li><a href="#" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <div class="cpy-right">
        <p>{{trans('greet.cright')}} |
            <a href="http://UCAS.edu.ps"> UCAS.</a>
        </p>
    </div>
</div>
<!-- //home -->
<!-- //home -->
<!-- js -->
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/jquery.desoslide.min.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/demo.js"></script>

<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/jquery-2.2.3.min.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/main.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/minicart.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/scrolling-nav.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/move-top.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/easing.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/SmoothScroll.min.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/numscroller-1.0.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/move-top.js"></script>
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/easing.js"></script>


<!-- //js -->
<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!--search jQuery-->
<!--search jQuery-->
<!-- cart-js -->
<script>
    chr.render();

    chr.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- gallery desoslide -->
<!-- gallery desoslide -->
<!-- Scrolling Nav JavaScript -->
<!-- //fixed-scroll-nav-js -->
<!-- start-smooth-scrolling -->
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- about bottom grid Numscroller -->
<!-- //about bottom grid Numscroller -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::to('/') }}/assets/theme/dist/web/js/bootstrap.js"></script>

</body>

</html>