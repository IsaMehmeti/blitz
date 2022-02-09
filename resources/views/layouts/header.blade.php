<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="{{asset('img/logo.png')}}" width="125" height="45" alt="Porto Admin"/>
        </a>
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
             data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown" aria-expanded="false">
                <figure class="profile-picture">

                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{auth()->user()->name}}</span>
                    <span class="role">Admin</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu" style="">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{route('user.index')}}"><i
                                class="fas fa-user"></i> {{__('My Profile')}}</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="/logout"><i
                                class="fas fa-power-off"></i>{{__('Logout')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end: header -->
