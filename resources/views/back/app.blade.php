<!DOCTYPE html>
<html  lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2016 17:25:18 GMT -->
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portal CSC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/insignea.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/insignea.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/insignea.png">
    <link rel="apple-touch-icon-precomposed" href="images/insignea.png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

@yield('head')
    {!! HTML::style('../../assets-minified/admin-all-demo.css')!!}
    {!! HTML::style('css/css_admin.css')!!}
    <!-- JS Core -->

    {!! HTML::script('../../assets-minified/js-core.js')!!}





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


<body class="fixed-header ">
<div id="sb-site">
    <div class="sb-slidebar bg-black sb-left sb-style-overlay">
        <div class="scrollable-content scrollable-slim-sidebar">
            <div class="pad10A">
                <div class="divider-header">Online</div>
                <ul class="chat-box">
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                            <div class="small-badge bg-green"></div>
                        </div>
                        <b>
                            Grace Padilla
                        </b>
                        <p>On the other hand, we denounce...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                            <div class="small-badge bg-green"></div>
                        </div>
                        <b>
                            Carl Gamble
                        </b>
                        <p>Dislike men who are so beguiled...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial3.jpg" alt="">
                            <div class="small-badge bg-green"></div>
                        </div>
                        <b>
                            Michael Poole
                        </b>
                        <p>Of pleasure of the moment, so...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial4.jpg" alt="">
                            <div class="small-badge bg-green"></div>
                        </div>
                        <b>
                            Bill Green
                        </b>
                        <p>That they cannot foresee the...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial5.jpg" alt="">
                            <div class="small-badge bg-green"></div>
                        </div>
                        <b>
                            Cheryl Soucy
                        </b>
                        <p>Pain and trouble that are bound...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                </ul>
                <div class="divider-header">Idle</div>
                <ul class="chat-box">
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial6.jpg" alt="">
                            <div class="small-badge bg-orange"></div>
                        </div>
                        <b>
                            Jose Kramer
                        </b>
                        <p>Equal blame belongs to those...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial7.jpg" alt="">
                            <div class="small-badge bg-orange"></div>
                        </div>
                        <b>
                            Dan Garcia
                        </b>
                        <p>Weakness of will, which is same...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial8.jpg" alt="">
                            <div class="small-badge bg-orange"></div>
                        </div>
                        <b>
                            Edward Bridges
                        </b>
                        <p>These cases are perfectly simple...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                </ul>
                <div class="divider-header">Offline</div>
                <ul class="chat-box">
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                            <div class="small-badge bg-red"></div>
                        </div>
                        <b>
                            Randy Herod
                        </b>
                        <p>In a free hour, when our power...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                    <li>
                        <div class="status-badge">
                            <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                            <div class="small-badge bg-red"></div>
                        </div>
                        <b>
                            Patricia Bagley
                        </b>
                        <p>when nothing prevents our being...</p>
                        <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sb-slidebar bg-black sb-right sb-style-overlay">
        <div class="scrollable-content scrollable-slim-sidebar">
            <div class="pad15A">
                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                    Cloud status
                    <span class="caret"></span>
                </a>
                <div id="sidebar-toggle-1" class="collapse in">
                    <div class="pad15A container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                            </div>
                        </div>
                        <div class="divider mrg15T mrg15B"></div>
                        <div class="text-center">
                            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                <i class="glyph-icon icon-refresh"></i>
                                Update charts
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                    Latest transfers
                    <span class="caret"></span>
                </a>
                <div id="sidebar-toggle-6" class="collapse in">

                    <ul class="files-box">
                        <li>
                            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                            <div class="files-content">
                                <b>blog_export.zip</b>
                                <div class="files-date">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    added on <b>22.10.2014</b>
                                </div>
                            </div>
                            <div class="files-buttons">
                                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                    <i class="glyph-icon icon-cloud-download"></i>
                                </a>
                                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                    <i class="glyph-icon icon-times"></i>
                                </a>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <i class="files-icon glyph-icon icon-file-code-o"></i>
                            <div class="files-content">
                                <b>homepage-test.html</b>
                                <div class="files-date">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    added  <b>19.10.2014</b>
                                </div>
                            </div>
                            <div class="files-buttons">
                                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                    <i class="glyph-icon icon-cloud-download"></i>
                                </a>
                                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                    <i class="glyph-icon icon-times"></i>
                                </a>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                            <div class="files-content">
                                <b>monthlyReport.jpg</b>
                                <div class="files-date">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    added on <b>10.9.2014</b>
                                </div>
                            </div>
                            <div class="files-buttons">
                                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                    <i class="glyph-icon icon-cloud-download"></i>
                                </a>
                                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                    <i class="glyph-icon icon-times"></i>
                                </a>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                            <div class="files-content">
                                <b>new_presentation.doc</b>
                                <div class="files-date">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    added on <b>5.9.2014</b>
                                </div>
                            </div>
                            <div class="files-buttons">
                                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                    <i class="glyph-icon icon-cloud-download"></i>
                                </a>
                                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                    <i class="glyph-icon icon-times"></i>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="clear"></div>

                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
                    Tasks for today
                    <span class="caret"></span>
                </a>
                <div id="sidebar-toggle-3" class="collapse in">

                    <ul class="progress-box">
                        <li>
                            <div class="progress-title">
                                New features development
                                <b>87%</b>
                            </div>
                            <div class="progressbar-smaller progressbar" data-value="87">
                                <div class="progressbar-value bg-azure">
                                    <div class="progressbar-overlay"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <b class="pull-right">66%</b>
                            <div class="progress-title">
                                Finishing uploading files

                            </div>
                            <div class="progressbar-smaller progressbar" data-value="66">
                                <div class="progressbar-value bg-red">
                                    <div class="progressbar-overlay"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="progress-title">
                                Creating tutorials
                                <b>58%</b>
                            </div>
                            <div class="progressbar-smaller progressbar" data-value="58">
                                <div class="progressbar-value bg-blue-alt"></div>
                            </div>
                        </li>
                        <li>
                            <div class="progress-title">
                                Frontend bonus theme
                                <b>74%</b>
                            </div>
                            <div class="progressbar-smaller progressbar" data-value="74">
                                <div class="progressbar-value bg-purple"></div>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="clear"></div>

                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
                    Pending notifications
                    <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
                    <span class="caret"></span>
                </a>
                <div id="sidebar-toggle-4" class="collapse in">
                    <ul class="notifications-box notifications-box-alt">
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-random"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                <i class="glyph-icon icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-8 font-inverse">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
            </div>

            <div id="header-nav-left">
                <div class="user-account-btn dropdown">
                    <a href="#" title="{{ auth()->user()->username }}" class="user-profile clearfix" data-toggle="dropdown">
                        <img width="28" src="{{ auth()->user()->avatar }}" alt="Profile image">
                        <span>{{ auth()->user()->username }}</span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img">
                                    <a href="#" title="" class="change-img">Change photo</a>
                                    <img src="../../assets/image-resources/gravatar.jpg" alt="">
                                </div>
                                <div class="user-info">
                            <span>
                                {{ auth()->user()->username }}
                                <i>{{ auth()->user()->email }}</i>
                            </span>
                                    <a href="#" title="Edit profile">Edit profile</a>
                                    <a href="#" title="View notifications">View notifications</a>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <ul class="reset-ul mrg5B">
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View login page example

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View lockscreen example

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View account details

                                    </a>
                                </li>
                            </ul>
                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a href="{!! url('auth/logout') !!}" class="btn display-block font-normal btn-danger">
                                    <i class="glyph-icon icon-power-off"></i>
                                    {{ trans('back/admin.logout') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #header-nav-left -->

            <div id="header-nav-right">
                <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
                    <i class="glyph-icon icon-search"></i>
                </a>
                <div class="hide" id="popover-search">
                    <div class="pad5A">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search terms here ...">
                            <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Buscar</a>
                    </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                    <i class="glyph-icon icon-arrows-alt"></i>
                </a>
                <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
                    <i class="glyph-icon icon-linecons-paper-plane"></i>
                </a>
                <div class="dropdown" id="notifications-btn">
                    <a data-toggle="dropdown" href="#" title="">
                        <span class="small-badge bg-yellow"></span>
                        <i class="glyph-icon icon-linecons-megaphone"></i>
                    </a>
                    <div class="dropdown-menu box-md float-right">

                        <div class="popover-title display-block clearfix pad10A">
                            Notificaciones
                            <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                                More options...
                            </a>
                        </div>
                        <div class="scrollable-content scrollable-slim-box">
                            <ul class="no-border notifications-box">
                                <li>
                                    <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                    <span class="notification-text font-blue">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text font-blue">Alternate notification styling.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pad10A button-pane button-pane-alt text-center">
                            <a href="#" class="btn btn-primary" title="View all notifications">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown" id="progress-btn">
                    <a data-toggle="dropdown" href="#" title="">
                        <span class="small-badge bg-azure"></span>
                        <i class="glyph-icon icon-linecons-params"></i>
                    </a>
                    <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                        <div class="scrollable-content scrollable-slim-box">
                            <ul class="no-border progress-box progress-box-links">
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">23%</b>
                                        <div class="progress-title">
                                            Finishing uploading files

                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="23">
                                            <div class="progressbar-value bg-blue-alt">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">91%</b>
                                        <div class="progress-title">
                                            Roadmap progress
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="91">
                                            <div class="progressbar-value bg-red">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">58%</b>
                                        <div class="progress-title">
                                            Images upload
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="58">
                                            <div class="progressbar-value bg-green"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">74%</b>
                                        <div class="progress-title">
                                            WordPress migration
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="74">
                                            <div class="progressbar-value bg-purple"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">91%</b>
                                        <div class="progress-title">
                                            Agile development procedures
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="91">
                                            <div class="progressbar-value bg-black">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">58%</b>
                                        <div class="progress-title">
                                            Systems integration
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="58">
                                            <div class="progressbar-value bg-azure"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <b class="pull-right">97%</b>
                                        <div class="progress-title">
                                            Code optimizations
                                        </div>
                                        <div class="progressbar-smaller progressbar" data-value="97">
                                            <div class="progressbar-value bg-yellow"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pad5A button-pane button-pane-alt text-center">
                            <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown" id="cloud-btn">
                    <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                        <i class="glyph-icon icon-linecons-cloud"></i>
                    </a>
                </div>
                <div class="dropdown" id="dashnav-btn">
                    <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                        <i class="glyph-icon icon-linecons-cog"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="box-sm">
                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                <a href="#" class="btn vertical-button hover-blue-alt" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                                    Dashboard
                                </a>
                                <a href="#" class="btn vertical-button hover-green" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                                    Widgets
                                </a>
                                <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                                    Tables
                                </a>
                                <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                                    Charts
                                </a>
                                <a href="#" class="btn vertical-button hover-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                                    Buttons
                                </a>
                                <a href="#" class="btn vertical-button hover-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                                    Panels
                                </a>
                            </div>
                            <div class="divider"></div>
                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                <a href="#" class="btn vertical-button remove-border btn-info" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                                    Dashboard
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                                    Widgets
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                                    Tables
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                                    Charts
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                                    Buttons
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                                    Panels
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="header-btn" id="logout-btn" href="" title="Lockscreen page example">
                    <i class="glyph-icon icon-linecons-lock"></i>
                </a>

            </div><!-- #header-nav-right -->

        </div>
        <div id="page-sidebar" class="font-inverse" style="color: #fff;background: #34495e">
            <div class="scroll-sidebar">


                <ul id="sidebar-menu">
                    <li class="header"><span>Vista General</span></li>
                    @if(session('statut') == 'admin')
                        <li {!! classActivePath('admin') !!} >
                            <a href="{!! route('admin') !!}" title="Admin Dashboard" >
                                <i class="glyph-icon icon-linecons-tv"></i>
                                <span>{{ trans('back/admin.dashboard') }}</span>
                            </a>
                        </li>

                    @endif
                    <li class="divider"></li>
                    <li class="no-menu">
                        <a href="{!! route('home')!!}" title="{{ trans('back/admin.home') }}">
                            <i class="glyph-icon icon-linecons-beaker"></i>
                            <span>{{ trans('back/admin.home') }}</span>
                            <span class="bs-label label-danger">New</span>
                        </a>
                    </li>
                    <li class="header"><span>Administradores</span></li>

                    <li {!! classActivePath('medias') !!} class="no-menu">
                        <a href="{!! route('medias') !!}" title="{{ trans('back/admin.medias') }}">
                            <i class="glyph-icon icon-file"></i>
                            <span>{{ trans('back/admin.medias') }}</span>
                        </a>
                    </li>
                    <li{!! classActiveSegment(1, 'user') !!}>
                        <a href="#" title="Ususarios">
                            <i class="glyph-icon icon-linecons-user"></i>
                            <span> {{ trans('back/admin.users') }}</span>
                        </a>
                        <div class="sidebar-submenu">

                            <ul>
                                <li><a href="{!! url('user') !!}">{{ trans('back/admin.see-all') }}</a></li>
                                <li><a href="{!! url('user/create') !!}">{{ trans('back/admin.add') }}</a></li>
                                <li><a href="{!! url('user/roles') !!}">{{ trans('back/roles.roles') }}</a></li>
                            </ul>

                        </div><!-- .sidebar-submenu -->
                    </li>

                    <li {!! classActivePath('contact') !!} class="no-menu">
                        <a href="{!! url('contact') !!}" title="{{ trans('back/admin.messages') }}">
                            <i class="glyph-icon icon-linecons-mail"></i>
                            <span>{{ trans('back/admin.messages') }}</span>
                        </a>
                    </li>

                    <li {!! classActivePath('comment') !!} class="no-menu">
                        <a href="{!! url('comment') !!}" title="{{ trans('back/admin.comments') }}">
                            <i class="glyph-icon icon-linecons-pencil"></i>
                            <span>{{ trans('back/admin.comments') }}</span>
                        </a>
                    </li>

                    <li {!! classActiveSegment(2, 'blog') !!}>
                        <a href="#" title="">
                            <i class="glyph-icon icon-linecons-calendar"></i>
                            <span> {{ trans('back/admin.posts') }}</span>
                        </a>
                        <div class="sidebar-submenu">

                            <ul >
                                <li><a href="{!! url('blog') !!}">{{ trans('back/admin.see-all') }}</a></li>
                                <li><a href="{!! url('blog/create') !!}">{{ trans('back/admin.add') }}</a></li>
                            </ul>

                        </div><!-- .sidebar-submenu -->

                    </li>
                    <li class="divider"></li>
                    <li {!! classActiveSegment(3,'matricula') !!}>
                        <a href="{!! url('matricula') !!}" title="Matricula">
                            <i class="glyph-icon icon-linecons-doc"></i>
                            <span>{{ trans('back/matricula.title') }}</span>
                        </a>
                        <div class="sidebar-submenu">

                            <ul >
                                <li><a href="{!! url('matricula/create') !!}">{{ trans('back/matricula.add') }}</a></li>
                            </ul>

                        </div>
                    </li>
                </ul><!-- #sidebar-menu -->


            </div>
        </div>
        <div id="page-content-wrapper">
            <div id="page-content">
              <div class="conteiner">
                  @yield('main')
              </div>
            </div>
        </div>
    </div>


    <!-- JS Demo -->
    {!! HTML::script('../../assets-minified/admin-all-demo.js')!!}
    <script type="text/javascript" src="../../assets/widgets/datepicker/datepicker.js"></script>
    <script type="text/javascript">
        /* Datepicker bootstrap */

        $(function() { "use strict";
            $('.bootstrap-datepicker').bsdatepicker({
                format: 'mm-dd-yyyy'
            });
        });

    </script>
    @yield('scripts')

</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2016 17:25:18 GMT -->
</html>