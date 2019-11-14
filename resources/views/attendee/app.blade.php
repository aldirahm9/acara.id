<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>acara.id @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your page description here" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Theme skin -->
    <link id="t-colors" href="../../color/default.css" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../../img/a.png">

    <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
    <style>
        .no-arrow {
            -moz-appearance: textfield;
        }

        .no-arrow::-webkit-inner-spin-button {
            display: none;
        }

        .no-arrow::-webkit-outer-spin-button,
        .no-arrow::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>
</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <ul class="topmenu">
                                <li><a href="#">Home</a> &#47;</li>
                                <li><a href="#">Terms</a> &#47;</li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="span6">

                            <ul class="social-network">
                                <li><a href="#" data-placement="bottom" title="Twitter"><i
                                            class="icon-circled icon-bglight icon-twitter"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Instagram"><i
                                            class="icon-circled icon-instagram icon-bglight"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">


                <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                            <h2><a href="/" style="color: #4694CA"><img src="../../img/logooo.png" width="200"></a></h2>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        @guest
                                        <li @yield('action_home')>
                                            <a href="/">Home</a>
                                        </li>
                                        <li @yield('action_how')>
                                            <a href="/howit">How It Works</a>
                                        </li>
                                        <li @yield('action_event')>
                                            <a href="/event">Event</a>
                                        </li>
                                        <li @yield('action_con')>
                                            <a href="/contact">Contact </a>
                                        </li>
                                        <li class="dropdown @yield('action_acc')">
                                            <a href="javascript:;"><img src="../../img/acc.png" width="27"><i
                                                    class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/login">Login</a></li>
                                                @if (Route::has('register'))
                                                <li><a href="/register">Signup</a></li>
                                                @endif
                                                @else
                                                <li @yield('action_home')>
                                                    <a href="/">Home</a>
                                                </li>
                                                <li @yield('action_how')>
                                                    <a href="/howit">How It Works</a>
                                                </li>
                                                <li @yield('action_event')>
                                                    <a href="/event">Event</a>
                                                </li>
                                                <li @yield('action_con')>
                                                    <a href="/contact">Contact </a>
                                                </li>
                                                <li class="dropdown @yield('action_acc')">
                                                    <a href="javasript:;">{{ Auth::user()->name }} <i
                                                            class="icon-angle-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/mytickets/{{ Auth::user()->id }}">My Tickets
                                                                (3)</a></li>
                                                        <li @yield('action_org')>
                                                            @if(!Auth::user()->isOrganizer())
                                                            <a data-toggle="modal" data-target="#exampleModalCenter"
                                                                href="">Organizer Dashboard</a>
                                                            @else
                                                            <a href="{{route('dashboard')}}">Organizer Dashboard</a>
                                                            @endif
                                                            {{-- bikin if dia organizer ke dashboard kalo ngga bikin organizer, ini baru modal nya doang --}}
                                                        </li>
                                                        <li><a href="/logout" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                                @endguest
                                            </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        @yield('content')

        <!-- Modal -->
        @auth
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    @if(!Auth::user()->hasInvitation())
                    <div class="modal-header" style="text-align:center;">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color:dimgrey">Organizer Dashboard
                        </h5>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align:center;">
                        <label>Let's build and grow your organization here to reach all of the targets and
                            goals!</label>
                        <a class="btn btn-rounded btn-large btn-info" href="/make_org"><i class="icon-plus-sign"
                                style="color:azure"></i> Create New Organization</a>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    @elseif(Auth::user()->hasInvitation())
                    <div class="modal-header" style="text-align:center;">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color:dimgrey">Organizer Dashboard
                        </h5>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align:center;">
                        <h6>You are invited by {{Auth::user()->organizer->name}}</h6>
                        {!! Form::open(['route'=>
                        'member.invite.accept','method'=>'POST','style'=>'display:none','id'=>'acceptForm']) !!}
                        {!! Form::close() !!}
                        <button onclick="event.preventDefault();
                        document.getElementById('acceptForm').submit();" type="submit"
                            class="btn btn-rounded btn-large btn-success"><i class="icon-check" style="color:azure"></i>
                            Accept</button>

                        <button onclick="event.preventDefault();
                        document.getElementById('declineForm').submit();" type="submit"
                            class="btn btn-rounded btn-large btn-danger"><i class="icon-remove-sign"
                                style="color:azure"></i> Decline</button>
                        {!! Form::open(['route'=>
                        'member.invite.decline','method'=>'POST','style'=>'display:none','id'=>'declineForm']) !!}
                        {!! Form::close() !!}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endauth

        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <div class="footer_logo">
                                <h3><a href="index.html"> <img src="../../img/a.png" height="42" width="42">
                                        acara.<strong>id</strong></a></h3>
                            </div>
                            <address>
                                <strong>acara.id company Inc.</strong><br>
                                Jl. Rawamangun Muka, No. 20<br>
                                Jakarta 13426 Indonesia
                            </address>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                            <i class="icon-envelope-alt"></i> info@acara.id
                            </p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Browse pages</h5>
                            <ul class="link-list">
                                <li><a href="#">Our company</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Press release</a></li>
                                <li><a href="#">What we have done</a></li>
                                <li><a href="#">Our support forum</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            {{-- <h5 class="widgetheading">From flickr</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div> --}}
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div class="copyright">
                                <p><span>&copy; Remember Inc. All right reserved</span></p>
                            </div>

                        </div>

                        <div class="span6">
                            <div class="credits">
                                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/toucheffects.js')}}"></script>
    <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
    <script src="{{asset('js/portfolio/setting.js')}}"></script>
    <script src="{{asset('js/animate.js')}}"></script>
    <!-- Template Custom JavaScript File -->
    <script src="js/custom.js"></script>

</body>

</html>
