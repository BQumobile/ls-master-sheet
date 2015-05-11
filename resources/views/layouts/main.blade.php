<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>LS Administration</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
    @section('post_css')
   @show
</head>


<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.html" class="navbar-brand">
          <img src="images/logo.png" class="m-r-sm" alt="scale">

        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-grid"></i>
          </a>
          <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
            <div class="row m-l-none m-r-none m-t m-b text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="{!! URL::to('/student/create') !!}">
                    <span class="m-b-xs block">
                      <i class="i i-docs i-2x text-primary-lt"></i>
                    </span>
                    <small class="text-muted">Add Admissions</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="{!! URL::to('/student') !!}">
                    <span class="m-b-xs block">
                      <i class="i i-calendar i-2x text-danger-lt"></i>
                    </span>
                    <small class="text-muted">View Admissions</small>
                  </a>
                </div>
              </div><!--
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-map i-2x text-success-lt"></i>
                    </span>
                    <small class="text-muted">Map</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-paperplane i-2x text-info-lt"></i>
                    </span>
                    <small class="text-muted">Trainning</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-images i-2x text-muted"></i>
                    </span>
                    <small class="text-muted">Photos</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-clock i-2x text-warning-lter"></i>
                    </span>
                    <small class="text-muted">Timeline</small>
                  </a>
                </div>
              </div>-->
            </div>
          </section>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
          </div>
        </div>
      </form>
	  @section('san')
      @show
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        <!--<li class="hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-chat3"></i>
            <span class="badge badge-sm up bg-danger count">2</span>
          </a>
          <section class="dropdown-menu aside-xl animated flipInY">
            <section class="panel bg-white">
              <div class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </div>
              <div class="list-group list-group-alt">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="images/a0.png" alt="..." class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <div class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </div>
            </section>
          </section>
        </li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="images/a0.png" alt="...">
            </span>
            {!! Sentry::getUser()->first_name !!}&nbsp;&nbsp;{!! Sentry::getUser()->last_name !!}  <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <!--<li>
              <span class="arrow top"></span>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>-->
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{!! URL::to('/').'/logout' !!}" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb avatar pull-left m-r">
                        <img src="images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt">{!! Sentry::getUser()->first_name !!}&nbsp;&nbsp;{!! Sentry::getUser()->last_name !!} </strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block">CEO</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <!--<li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="#">Settings</a>
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>-->
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="{!! URL::to('/').'/logout' !!}" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                      <ul class="nav nav-main" data-ride="collapse">
                                      <!--  <li >
                                          <a href="index.html" class="auto">
                                            <i class="i i-statistics icon">
                                            </i>
                                            <span class="font-bold">Overview</span>
                                          </a>
                                        </li>
                                        <li >
                                          <a href="#" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <b class="badge bg-danger pull-right">4</b>
                                            <i class="i i-stack icon">
                                            </i>
                                            <span class="font-bold">Layouts</span>
                                          </a>
                                          <ul class="nav dk">
                                            <li >
                                              <a href="layout-color.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Color option</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="layout-hbox.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Hbox layout</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="layout-boxed.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Boxed layout</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="layout-fluid.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Fluid layout</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                        <li >
                                          <a href="#" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-lab icon">
                                            </i>
                                            <span class="font-bold">UI kit</span>
                                          </a>
                                          <ul class="nav dk">
                                            <li >
                                              <a href="buttons.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Buttons</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="icons.html" class="auto">
                                                <b class="badge bg-info pull-right">369</b>
                                                <i class="i i-dot"></i>

                                                <span>Icons</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="grid.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Grid</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="widgets.html" class="auto">
                                                <b class="badge bg-dark pull-right">8</b>
                                                <i class="i i-dot"></i>

                                                <span>Widgets</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="components.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Components</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="list.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>List group</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="#table" class="auto">
                                                <span class="pull-right text-muted">
                                                  <i class="i i-circle-sm-o text"></i>
                                                  <i class="i i-circle-sm text-active"></i>
                                                </span>
                                                <i class="i i-dot"></i>

                                                <span>Table</span>
                                              </a>
                                              <ul class="nav dker">
                                                <li >
                                                  <a href="table-static.html">
                                                    <i class="i i-dot"></i>
                                                    <span>Table static</span>
                                                  </a>
                                                </li>
                                                <li >
                                                  <a href="table-datatable.html">
                                                    <i class="i i-dot"></i>
                                                    <span>Datatable</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li >
                                              <a href="#form" class="auto">
                                                <span class="pull-right text-muted">
                                                  <i class="i i-circle-sm-o text"></i>
                                                  <i class="i i-circle-sm text-active"></i>
                                                </span>
                                                <i class="i i-dot"></i>

                                                <span>Form</span>
                                              </a>
                                              <ul class="nav dker">
                                                <li >
                                                  <a href="form-elements.html">
                                                    <i class="i i-dot"></i>
                                                    <span>Form elements</span>
                                                  </a>
                                                </li>
                                                <li >
                                                  <a href="form-validation.html">
                                                    <i class="i i-dot"></i>
                                                    <span>Form validation</span>
                                                  </a>
                                                </li>
                                                <li >
                                                  <a href="form-wizard.html">
                                                    <i class="i i-dot"></i>
                                                    <span>Form wizard</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li >
                                              <a href="chart.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Chart</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="portlet.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Portlet</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="timeline.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Timeline</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>-->
                                        <li >
                                          <a href="{!! URL::to('/student') !!}"">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-docs icon">
                                            </i>
                                            <span class="font-bold">Admissions</span>
                                          </a>
                                          <ul class="nav dk">
                                            <li >
                                              <a href="{!! URL::to('/student') !!}">
                                                <i class="i i-dot"></i>

                                                <span>New Admission</span>
                                              </a>
                                            </li>
                                            </ul>
                                            <!--<li >
                                              <a href="invoice.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Invoice</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="intro.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Intro</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="master.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Master</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="gmap.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Google Map</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="jvectormap.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Vector Map</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="signin.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Signin</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="signup.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Signup</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="404.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>404</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>-->
                                        <!--<li >
                                          <a href="#" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-grid2 icon">
                                            </i>
                                            <span class="font-bold">Apps</span>
                                          </a>
                                          <ul class="nav dk">
                                            <li >
                                              <a href="mail.html" class="auto">
                                                <b class="badge bg-success lt pull-right">2</b>
                                                <i class="i i-dot"></i>

                                                <span>Mailbox</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="fullcalendar.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Calendar</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="project.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Project</span>
                                              </a>
                                            </li>
                                            <li >
                                              <a href="media.html" class="auto">
                                                <i class="i i-dot"></i>

                                                <span>Media</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>-->
                                      <!--
                                      <div class="line dk hidden-nav-xs"></div>
                                      <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                                      <ul class="nav">
                                        <li>
                                          <a href="mail.html#work">
                                            <i class="i i-circle-sm text-info-dk"></i>
                                            <span>Work space</span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="mail.html#social">
                                            <i class="i i-circle-sm text-success-dk"></i>
                                            <span>Connection</span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="mail.html#projects">
                                            <i class="i i-circle-sm text-danger-dk"></i>
                                            <span>Projects</span>
                                          </a>
                                        </li>
                                      </ul>
                                      <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                                      <ul class="nav">
                                        <li>
                                          <a href="#">
                                            <i class="i i-circle-sm-o text-success-lt"></i>
                                            <span>College</span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <i class="i i-circle-sm-o text-warning"></i>
                                            <span>Social</span>
                                          </a>
                                        </li>-->
                                      </ul>
                @section('left_nav')
                @stop
                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
              <ul class="breadcrumb"> <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                                 @section('breadcrumb')
                                  @stop
                                   </ul>

            <section class="scrollable wrapper">
            <br>
                @yield('content')


            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>

  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/datepicker/bootstrap-datepicker.js"></script>
    <script src="js/chosen/chosen.jquery.min.js"></script>



                @section('post_scripts')
                @show


</body>
</html>