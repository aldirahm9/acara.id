<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
        data-slide-speed="200" style="padding-top: 20px">

        <li class="nav-item start {{ request()->routeIs('dashboard') ? 'active' : ''}} ">
            <a href={{route('dashboard')}} class="nav-link ">
                <i class="icon-bar-chart"></i>
                <span class="title">Dashboard</span>
            </a>

        </li>
        {{-- SECTION SIDENAV ORGANIZER --}}
        @if (Auth::user()->isorganizer())
        <li class="heading">
            <h3 class="uppercase">{{Auth::user()->organizer->name}}</h3>
        </li>
        <li class="nav-item {{ request()->routeIs('members') ? 'active' : ''}} ">
            <a href={{route('members')}} class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">Members</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Events</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                        <span class="title">BINER 4.0</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                        <span class="title">PELANGI</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_clipboard.html" class="nav-link ">
                        <span class="title">....</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_typeahead.html" class="nav-link ">
                        <span class="title">Create Event</span>
                    </a>
                </li>

                <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            Finished Event
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" target="_blank" class="nav-link">
                                    BINER 0010
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                   BINER 3.0
                                </a>
                            </li>
                         
                        </ul>
                    </li>





            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Settings</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="form_fileupload.html" class="nav-link ">
                        <span class="title">Multiple File Upload</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_dropzone.html" class="nav-link ">
                        <span class="title">Dropzone File Upload</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        {{-- !SECTION  --}}
        {{-- SECTION SIDENAV ADMIN --}}
        @if (Auth::user()->isAdmin())
        <li class="heading">
            <h3 class="uppercase">ADMIN</h3>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">USERS</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Events</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                        <span class="title">BINER 4.0</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                        <span class="title">PELANGI</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_clipboard.html" class="nav-link ">
                        <span class="title">....</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_typeahead.html" class="nav-link ">
                        <span class="title">Create Event</span>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Organizers</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="form_fileupload.html" class="nav-link ">
                        <span class="title">Multiple File Upload</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_dropzone.html" class="nav-link ">
                        <span class="title">Dropzone File Upload</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        {{-- !SECTION  --}}
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-bulb"></i>
                <span class="title">Elements</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="elements_steps.html" class="nav-link ">
                        <span class="title">Steps</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_lists.html" class="nav-link ">
                        <span class="title">Lists</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_ribbons.html" class="nav-link ">
                        <span class="title">Ribbons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_overlay.html" class="nav-link ">
                        <span class="title">Overlays</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_cards.html" class="nav-link ">
                        <span class="title">User Cards</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-briefcase"></i>
                <span class="title">Tables</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="table_static_basic.html" class="nav-link ">
                        <span class="title">Basic Tables</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="table_static_responsive.html" class="nav-link ">
                        <span class="title">Responsive Tables</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="table_bootstrap.html" class="nav-link ">
                        <span class="title">Bootstrap Tables</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <span class="title">Datatables</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                        </li>
                        <li class="nav-item ">
                            <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="layout_blank_page8a36.html?p=" class="nav-link nav-toggle">
                <i class="icon-wallet"></i>
                <span class="title">Portlets</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="portlet_boxed.html" class="nav-link ">
                        <span class="title">Boxed Portlets</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="portlet_light.html" class="nav-link ">
                        <span class="title">Light Portlets</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="portlet_solid.html" class="nav-link ">
                        <span class="title">Solid Portlets</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="portlet_ajax.html" class="nav-link ">
                        <span class="title">Ajax Portlets</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="portlet_draggable.html" class="nav-link ">
                        <span class="title">Draggable Portlets</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-bar-chart"></i>
                <span class="title">Charts</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="charts_amcharts.html" class="nav-link ">
                        <span class="title">amChart</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="charts_flotcharts.html" class="nav-link ">
                        <span class="title">Flot Charts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="charts_flowchart.html" class="nav-link ">
                        <span class="title">Flow Charts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="charts_google.html" class="nav-link ">
                        <span class="title">Google Charts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="charts_echarts.html" class="nav-link ">
                        <span class="title">eCharts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="charts_morris.html" class="nav-link ">
                        <span class="title">Morris Charts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <span class="title">HighCharts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                        </li>
                        <li class="nav-item ">
                            <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                        </li>
                        <li class="nav-item ">
                            <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-pointer"></i>
                <span class="title">Maps</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="maps_google.html" class="nav-link ">
                        <span class="title">Google Maps</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="maps_vector.html" class="nav-link ">
                        <span class="title">Vector Maps</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
