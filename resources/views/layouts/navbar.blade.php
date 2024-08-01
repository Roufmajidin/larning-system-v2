<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer drawer-spacer-border">
                    <div class="media align-items-center">
                        <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2"
                            width="40" alt="">
                        <div class="media-body" style="line-height: 1.2">
                            <a href="blue-profile.html"><strong>Andrew Robles</strong></a>
                            <div>Site Manager</div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-clear-caret" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="blue-profile.html" class="dropdown-item dropdown-item-action ">View Profile</a>
                                <a href="blue-account.html" class="dropdown-item dropdown-item-action active">Edit
                                    Account</a>
                                <a href="#" class="dropdown-item dropdown-item-action">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DROPDOWN -->
                <div class="drawer-spacer">
                    <div class="dropdown">
                        <button class="btn btn-block dropdown-toggle text-left text-white" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Page Layouts</span>
                        </button>
                        <div class="dropdown-menu w-100">
                            <a href="blue-index.html" class="dropdown-item dropdown-item-action   active ">Default
                                Layout
                                (fluid)</a>
                            <a href="blue-index-drawer-light.html" class="dropdown-item dropdown-item-action ">Sidebar -
                                Light Color</a>
                            <a href="blue-index-navbar-primary.html" class="dropdown-item dropdown-item-action ">Navbar
                                - Primary</a>
                            <a href="blue-index-drawer-right.html" class="dropdown-item dropdown-item-action ">Layout
                                Sidebar Right</a>
                            <a href="blue-index-fixed.html" class="dropdown-item dropdown-item-action ">Fixed Layout</a>
                        </div>
                    </div>
                </div>
                <!-- HEADING -->
                <div class="drawer-heading">
                    Menu
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#"
                            data-target="#pageMenu" aria-controls="pageMenu" aria-expanded="true">
                            <i class="material-icons">layers</i>
                            <span class="drawer-menu-text">Master data</span>
                        </a>
                        <ul class="collapse show" id="pageMenu">
                            <li class="drawer-menu-item "><a href="blue-tickets.html">User</a></li>
                            <li class="drawer-menu-item "><a href="/dosen-master">Dosen</a></li>
                            <li class="drawer-menu-item "><a href="blue-profile.html">Mahasiswa</a></li>
                            </li>
                            <li class="drawer-menu-item active"><a href="blue-emails-listing.html">Emails
                                    Listing</a></li>

                        </ul>
                    </li>

                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#appsMenu" data-target="#appsMenu"
                            aria-controls="appsMenu" aria-expanded="false" class="collapsed">
                            <i class="material-icons">view_quilt</i>
                            <span class="drawer-menu-text"> Apps</span>
                        </a>
                        <ul class="collapse " id="appsMenu">
                            <li class="drawer-menu-item "><a href="blue-apps-email.html">Email</a></li>
                            <li class="drawer-menu-item "><a href="blue-apps-chat.html">Chat</a></li>
                            <li class="drawer-menu-item "><a href="blue-apps-clients.html">Clients</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#uiMenu"
                            aria-controls="uiMenu" aria-expanded="false" class="collapsed">
                            <i class="material-icons">library_books</i>
                            <span class="drawer-menu-text">UI Components</span>
                        </a>
                        <ul class="collapse " id="uiMenu">
                            <li class="drawer-menu-item "><a href="blue-ui-buttons.html">Buttons</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-colors.html">Colors</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-grid.html">Grid</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-navs.html">Navs</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-icons.html">Icons</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-typography.html">Typography</a>
                            </li>
                            <li class="drawer-menu-item "><a href="blue-ui-drag-drop.html">Drag &amp;
                                    Drop</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-tables.html">Tables</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-notifications.html">Notifications</a></li>
                            <li class="drawer-menu-item "><a href="blue-ui-loaders.html">Loaders</a></li>
                        </ul>
                    </li>
                    {{-- <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#formsMenu"
                            aria-controls="formsMenu" aria-expanded="false" class="collapsed">
                            <i class="material-icons">text_format</i>
                            <span class="drawer-menu-text">Forms</span>
                        </a>
                        <ul class="collapse " id="formsMenu">
                            <li class="drawer-menu-item "><a href="blue-form-controls.html">Form
                                    controls</a></li>
                            <li class="drawer-menu-item "><a href="blue-checkboxes-radios.html">Checkboxes
                                    and Radios</a></li>
                            <li class="drawer-menu-item "><a href="blue-switches-toggles.html">Switches
                                    and Toggles</a></li>
                            <li class="drawer-menu-item "><a href="blue-form-layout.html">Layout
                                    Variations</a></li>
                            <li class="drawer-menu-item "><a href="blue-validation.html">Validation</a>
                            </li>
                            <li class="drawer-menu-item "><a href="blue-custom-forms.html">Custom
                                    Forms</a></li>
                            <li class="drawer-menu-item "><a href="blue-text-editor.html">Text Editor</a>
                            </li>
                            <li class="drawer-menu-item "><a href="blue-datepicker.html">Datepicker</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="drawer-menu-item ">
                        <a href="blue-events-calendar.html">
                            <i class="material-icons">event_note</i>
                            <span class="drawer-menu-text">Events Calendar</span>
                        </a>
                    </li> --}}
                    {{-- <li class="drawer-menu-item ">
                        <a href="blue-maps.html">
                            <i class="material-icons">language</i>
                            <span class="drawer-menu-text">Maps</span>
                        </a>
                    </li> --}}
                    {{-- <li class="drawer-menu-item ">
                        <a href="blue-charts.html">
                            <i class="material-icons">insert_chart</i>
                            <span class="drawer-menu-text">Charts</span>
                        </a>
                    </li> --}}

                </ul>
                <!-- HEADING -->
                <div class="drawer-heading">
                    Activity
                </div>
                <!-- ACTIVITY -->

            </nav>

        </div>
    </div>
</div>
