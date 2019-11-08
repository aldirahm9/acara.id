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
        @if (Auth::user()->isOrganizer())
        <li class="heading">
            <h3 class="uppercase">{{Auth::user()->organizer->name}}</h3>
        </li>
        <li class="nav-item {{ request()->routeIs('dashboard.member.index') ? 'active' : ''}} ">
            <a href={{route('dashboard.member.index')}} class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">Members</span>
            </a>
        </li>
        <li class="nav-item  {{request()->routeIs('dashboard.event*') ? 'open active' : ''}}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title ">Events</span>
                <span class="arrow {{request()->routeIs('dashboard.event*') ? 'open' : ''}}"></span>
            </a>

            <ul class="sub-menu" {{request()->routeIs('dashboard.event*') ? 'style=display:block;' : ''}}>
                {{-- TODO: pisahin event yang udah finished sama belom --}}
                {{-- @foreach(Auth::user()->organizer->events->where('finished',0) as $event) --}}
                @foreach(Auth::user()->organizer->events as $each)
                <li class="nav-item {{ (request()->is('dashboard/event/' . $each->id)) ? 'active' : '' }} ">
                    <a href="{{route('dashboard.event.show',['event' => $each->id])}}" class="nav-link ">
                        <span class="title">{{$each->name}}</span>
                    </a>
                </li>
                @endforeach


                <li class="nav-item {{ (request()->is('dashboard/event/create')) ? 'active' : '' }} ">
                    <a href="{{route('dashboard.event.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i><span class="title">New Event</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        Finished Event
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        {{-- TODO: bikin foreach --}}
                        <li class="nav-item">
                            <a href="#" target="_blank" class="nav-link">
                                BINER 0010
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

        @if(request()->routeIs('dashboard.event*') && !request()->routeIs('dashboard.event.create'))

        <li class="heading">
            <h3 class="uppercase">{{$event->name}}</h3>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">Ticket</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Attendee</span>

            </a>

        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Setting</span>
                {{-- <span class="arrow"></span> --}}
            </a>
            {{-- <ul class="sub-menu">

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
            </ul> --}}
        </li>
        @endif
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




    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
