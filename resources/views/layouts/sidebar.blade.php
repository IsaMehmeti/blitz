<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">

        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">


                <ul class="nav nav-main">
                    <li class="{{ Request::is('/') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="/">
                            <i class="fas fa-columns"></i>
                            <span>{{__('Dashboard')}}</span>
                        </a>
                    </li>
{{--                    <li class="{{ Request::is('municipalities') ? 'nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="{{url('/municipalities')}}">--}}
{{--                            <i class="far fa-building"></i>--}}
{{--                            <span>{{__('messages.Municipalities')}}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="{{ Request::is('mail') ? 'nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="{{url('/mail')}}">--}}
{{--                            <i class="fas fa-envelope" aria-hidden="true"></i>--}}
{{--                            <span>{{__('messages.Send Email')}}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-parent {{ Request::is('collegium*') ? 'nav-expanded nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <i class="fas fa-industry" aria-hidden="true"></i>--}}
{{--                            <span>{{__('messages.Collegiums')}}</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-children">--}}
{{--                            <li class="{{ Request::is('collegium') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{route('collegium.index')}}">--}}
{{--                                    {{__('messages.Collegiums')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="{{ Request::is('collegium/create') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{route('collegium.create')}}">--}}
{{--                                    {{__('messages.Create Collegium')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-parent {{ Request::is('official*') ? 'nav-expanded nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <i class="fas fa-user-tie"></i>--}}
{{--                            <span> {{__('messages.Officials')}}</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-children">--}}
{{--                            <li class="{{ Request::is('official') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{route('official.index')}}">--}}
{{--                                    {{__('messages.Officials')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="{{ Request::is('official/create') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{route('official.create')}}">--}}
{{--                                    {{__('messages.Create Official')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="{{ Request::is('official/archive') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{route('archive')}}">--}}
{{--                                    {{__('messages.Archive')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-parent {{ Request::is('file*') ? 'nav-expanded nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <i class="fab fa-google-drive"></i>--}}
{{--                            <span>{{__('messages.File Storage')}}</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-children">--}}
{{--                            <li class="{{ Request::is('file') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{url('/file')}}">--}}
{{--                                    {{__('messages.File Storage')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="{{ Request::is('file/create') ? 'nav-active' : '' }}">--}}
{{--                                <a class="nav-link" href="{{url('/file/create')}}">--}}
{{--                                    {{__('messages.Create File')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="{{ Request::is('user/create') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('user.create')}}">
                            <i class="fas fa-users"></i>
                            <span>{{__('Create User')}}</span>
                        </a>
                    </li>
{{--                    <li class="{{ Request::is('calendar') ? 'nav-active' : '' }}">--}}
{{--                        <a class="nav-link" href="{{url('/calendar')}}">--}}
{{--                            <i class="fas fa-calendar-alt"></i>--}}
{{--                            <span>{{__('messages.Calendar')}}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </nav>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        </div>

    </div>

</aside>
<!-- end: sidebar -->
