<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-blue">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flow</title>


    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/themes/blue/app.css" rel="stylesheet">

</head>

<body>
    <div class="d-flex flex-column position-relative h-100">

        <nav class="navbar navbar-expand-md navbar-light d-print-none">
            <a class="navbar-brand" href="blue-index.html">
                <!-- SVG Logo -->
                <svg width="24px" height="24px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMaxYMin meet">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path
                            d="M3,-3.15936513e-15 L20,-2.74650094e-15 L20,-2.66453526e-15 C21.6568542,-2.96889791e-15 23,1.34314575 23,3 L23,20 L23,20 C23,21.6568542 21.6568542,23 20,23 L6,23 L3,23 L3,23 C1.34314575,23 1.09108455e-15,21.6568542 8.8817842e-16,20 L0,3 L0,3 C-2.02906125e-16,1.34314575 1.34314575,-3.24835102e-15 3,-3.55271368e-15 Z"
                            id="logoBackground"></path>
                        <rect id="Rectangle-6" fill="#FFFFFF" x="1.0952381" y="12.0960631" width="9.96553315"
                            height="9.76943696"></rect>
                        <rect id="Rectangle-6-Copy" fill="#FFFFFF" x="11.9533428" y="1.05597629" width="9.96553315"
                            height="9.76943696"></rect>
                    </g>
                </svg>
                <!-- //End SVG Logo -->

                <span class="navbar-brand-text">flow</span>
                <small class="text-muted">v.1</small>
            </a>
            <div class="d-none d-md-block d-lg-block">
                <!-- DEMO COLORS -->
                <a href="account.html" style="background: #6774DF;" class="demo-color  ">
                    <i class="material-icons align-middle align-self-center md-18">check</i>
                </a>
                <a href="blue-account.html" style="background: #4A90E2;" class="demo-color active ">
                    <i class="material-icons align-middle align-self-center md-18">check</i>
                </a>
                <a href="green-account.html" style="background: #7DC668;" class="demo-color  ">
                    <i class="material-icons align-middle align-self-center md-18">check</i>
                </a>
            </div>
            <!-- END DEMO  COLORS -->
            <button class="navbar-toggler navbar-toggler-right d-md-none d-lg-none" type="button" data-toggle="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item  align-self-center">
                        <div class="nav-link">
                            <div class="navbar--stats" role="group" aria-label="Basic example">
                                <div class="navbar--stats--icon">
                                    <i class="material-icons align-middle">local_atm</i>
                                </div>
                                <div class="navbar--stats--text">
                                    <a href="#">$13,288</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item  align-self-center">
                        <div class="nav-link">
                            <div class="navbar--stats">
                                <div class="navbar--stats--icon">
                                    <i class="material-icons align-middle">email</i>
                                </div>
                                <div class="navbar--stats--text align-self-center">
                                    <a href="#">124</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown notifications align-self-center" id="navbarNotifications">
                        <a href="#" class="nav-link dropdown-toggle nav-link-active" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="material-icons align-middle">notifications_active</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown"
                            id="notificationsDropdown">
                            <ul class="nav nav-tabs-notifications d-flex px-0" id="notifications-ul" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="notifications-tab" data-toggle="tab"
                                        href="#notifications" role="tab" aria-controls="notifications"
                                        aria-selected="true">Notifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="alerts-tab" data-toggle="tab" href="#alerts" role="tab"
                                        aria-controls="alerts" aria-selected="false">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                                        aria-controls="messages" aria-selected="false">Messages</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="notifications-tabs">
                                <div class="tab-pane fade show active" id="notifications" role="tabpanel"
                                    aria-labelledby="notifications-tab">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="w-100"><a href="#">john</a> received a new quote</div>
                                            <div class="w-100 text-muted">4 secs ago</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="w-100"><a href="#">karen</a> received a new quote</div>
                                            <div class="w-100 text-muted">25 mins ago</div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="w-100"><a href="#">jim</a> received a new quote</div>
                                            <div class="w-100 text-muted">7 hrs ago</div>
                                        </li>
                                        <li class="list-group-item text-right">
                                            <a href="#">
                                                <span class="align-middle">View All</span>
                                                <i class="material-icons md-18 align-middle">arrow_forward</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="alerts" role="tabpanel" aria-labelledby="alerts-tab">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <i class="material-icons align-middle mr-2 text-warning">
                                                    info_outline
                                                </i>
                                                <div class="media-body">
                                                    <div class="w-100"><a href="profile.html">john</a> received a new
                                                        <a href="#">quote</a>
                                                    </div>
                                                    <div class="w-100 text-muted">4 secs ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <i class="material-icons align-middle mr-2 text-success">
                                                    check_circle
                                                </i>
                                                <div class="media-body">
                                                    <div class="w-100"><a href="profile.html">karen</a> completed a
                                                        <a href="#">task</a>
                                                    </div>
                                                    <div class="w-100 text-muted">25 mins ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <i class="material-icons align-middle mr-2 text-danger">
                                                    warning
                                                </i>
                                                <div class="media-body">
                                                    <div class="w-100"><a href="profile.html">jim</a> removed a <a
                                                            href="#">task</a></div>
                                                    <div class="w-100 text-muted">7 hrs ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-right">
                                            <a href="#">
                                                <span class="align-middle">View All</span>
                                                <i class="material-icons md-18 align-middle">arrow_forward</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <a href="profile.html">
                                                    <img src="assets/images/avatars/lucas-sankey-378674.jpg"
                                                        class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <div class="w-100">I started that project we talked...</div>
                                                    <div class="w-100 text-muted">4 secs ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <a href="profile.html">
                                                    <img src="assets/images/avatars/alex-sheldon-271322.jpg"
                                                        class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <div class="w-100">Can we arrange a meeting?...</div>
                                                    <div class="w-100 text-muted">25 mins ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <a href="profile.html">
                                                    <img src="assets/images/avatars/foto-sushi-128246.jpg"
                                                        class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <div class="w-100">We need to fix some bugs...</div>
                                                    <div class="w-100 text-muted">7 hrs ago</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-right">
                                            <a href="#">
                                                <span class="align-middle">View All</span>
                                                <i class="material-icons md-18 align-middle">arrow_forward</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown emails align-self-center">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons align-middle">email</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="emailsDropdown"
                            id="emailsDropdown">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/lucas-sankey-378674.jpg"
                                                class="img-fluid rounded-circle mr-2" width="35" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="w-100">New project</div>
                                            <div class="w-100 text-muted">I started that project we talked...</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/alex-sheldon-271322.jpg"
                                                class="img-fluid rounded-circle mr-2" width="35" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="w-100">ASAP meeting</div>
                                            <div class="w-100 text-muted">Can we arrange a meeting?...</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/foto-sushi-128246.jpg"
                                                class="img-fluid rounded-circle mr-2" width="35" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="w-100">Need help</div>
                                            <div class="w-100 text-muted">We need to fix some bugs...</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item text-right">
                                    <a href="#">
                                        <span class="align-middle">View All</span>
                                        <i class="material-icons md-18 align-middle">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-dropdown">
                        <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="dropdown"
                            aria-expanded="false">
                            Dashboard <img src="assets/images/avatars/andrew-robles-300868.jpg"
                                class="img-fluid rounded-circle ml-1" width="35" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-account">
                            <div class="account-info">
                                <img src="assets/images/avatars/andrew-robles-300868.jpg"
                                    class="img-fluid rounded-circle mr-2" width="45" alt="">
                                <div class="lh-12">
                                    <a href="profile.html"><strong>Andrew Robles</strong></a>
                                    <div class="text-light">Site Manager</div>
                                </div>
                            </div>
                            <ul class="list-unstyled account-menu">
                                <li><a href="account.html" class="dropdown-item "><i
                                            class="material-icons md-18 align-middle mr-1">lock</i> <span
                                            class="align-middle">Account</span></a></li>
                                <li><a href="profile.html" class="dropdown-item "><i
                                            class="material-icons md-18 align-middle mr-1">account_circle</i> <span
                                            class="align-middle">Profile</span></a></li>
                                <li><a href="#" class="dropdown-item"><i
                                            class="material-icons md-18 align-middle mr-1">settings</i> <span
                                            class="align-middle">Settings</span></a></li>
                                <li>
                                    <a href="#" class="dropdown-item">
                                        <i class="material-icons md-18 align-middle mr-1">build</i>
                                        <span class="align-middle">Support</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">
                                        <i class="material-icons md-18 align-middle mr-1">question_answer</i>
                                        <span class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li><a href="login.html" class="dropdown-item"><i
                                            class="material-icons md-18 align-middle mr-1">exit_to_app</i> <span
                                            class="align-middle">Logout</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
                <!-- CONTENT BODY -->



                @yield('content')

            </div>

            <!-- drawer -->
            @include('layouts.navbar')


        </div>
        <!-- // END drawer-layout -->
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="assets/vendor/simplebar.js"></script>


    <script src="assets/vendor/Chart.min.js"></script>
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/dateformat.js"></script>
    <script src="assets/vendor/bootstrap-datepicker.min.js"></script>

    <script>
        window.theme = "blue";
    </script>
    <script src="assets/js/color_variables.js"></script>
    <script src="assets/js/app.js"></script>


    <script src="assets/vendor/dom-factory.js"></script>
    <!-- DOM Factory -->
    <script src="assets/vendor/material-design-kit.js"></script>
    <!-- MDK -->



    <script>
        (function() {
            'use strict';

            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()

            // Connect button(s) to drawer(s)
            var sidebarToggle = Array.prototype.slice.call(document.querySelectorAll('[data-toggle="sidebar"]'))

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        drawer.mdkDrawer.toggle()
                    }
                })
            })

            //////////////////////////////////////////
            // BREAK OUT OF ENVATO LIVE DEMO IFRAME //
            //////////////////////////////////////////

            window.top.location.hostname !== window.location.hostname && (window.top.location = window.location)

        })();
    </script>



</body>

</html>
