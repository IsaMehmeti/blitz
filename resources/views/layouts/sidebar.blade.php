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
                    <li class="{{ Request::is('lead/create') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{url('lead/create')}}">
                            <i class="fab fa-google-drive"></i>
                            <span>{{__('Upload Leads')}}</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('/customers') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('customer.index')}}">
                            <i class="fas fa-credit-card"></i>
                            <span>{{__('Customers')}}</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('/transmissions') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('transmission.index')}}">
                            <i class="fas fa-server"></i>
                            <span>{{__('Transmissions')}}</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('user/create') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{route('user.create')}}">
                            <i class="fas fa-users"></i>
                            <span>{{__('Create User')}}</span>
                        </a>
                    </li>
                </ul>
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
