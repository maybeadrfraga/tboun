@props(['activePage', 'activeItem', 'activeSubitem'])
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">    
    <img src="{{ asset('assets') }}/img/shisha-logo.png" class='pt-4 px-4 d-flex text-wrap align-items-center' style="width: 80%;" alt="main_logo">
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                    role="button" aria-expanded="false">
                    @if (auth()->user()->picture)
                        <img src="/storage/{{ auth()->user()->picture }}" alt="avatar" class="avatar">
                    @else
                        <img src="{{ asset('assets') }}/img/default-avatar.png" alt="avatar" class="avatar">
                    @endif
                    <span class="nav-link-text ms-2 ps-1">{{ auth()->user()->name }}</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white " href="{{ route('user-profile') }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal ms-3 ps-1"> Settings </span>
                            </a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                            @csrf
                        </form>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal ms-3 ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <!-- Orders Section -->
            <li class="nav-item mt-0">
                <a class="nav-link text-white {{ $activeSubitem == 'order-list' ? ' active ' : '' }}"
                    href="{{ route('orders.index') }}">
                    <span class="sidenav-normal ps-1"> Orders </span>
                </a>
            </li>

            <!-- Products Section -->
            <li class="nav-item mt-0">
                <a class="nav-link text-white {{ $activeSubitem == 'products-list' ? ' active ' : '' }}"
                    href="{{ route('products.index') }}">
                    <span class="sidenav-normal ps-1"> Products </span>
                </a>
            </li>

            <!-- Tickets Section -->
            <li class="nav-item mt-0">
                <a class="nav-link text-white {{ $activeSubitem == 'ticket-list' ? ' active ' : '' }}"
                    href="{{ route('tickets.index') }}">
                    <span class="sidenav-normal ps-1"> Tickets </span>
                </a>
            </li>            

            @if(auth()->user()->isAdmin())
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#LaravelExamples"
                        class="nav-link text-white {{ $activePage == 'laravel-examples' ? ' active ' : '' }}"
                        aria-controls="LaravelExamples" role="button" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="nav-link-text ms-2 ps-1">Admin</span>
                    </a>
                    <div class="collapse {{ $activePage == 'laravel-examples' ? ' show ' : '' }}"
                        id="LaravelExamples">
                        <ul class="nav">
                            <li class="nav-item {{ $activeItem == 'user-profile' ? ' active ' : '' }}">
                                <a class="nav-link text-white {{ $activeItem == 'user-profile' ? ' active ' : '' }}"
                                    href="{{ route('user-profile') }}">
                                    <span class="sidenav-mini-icon"> UP </span>
                                    <span class="sidenav-normal ms-2 ps-1"> User Profile <b class="caret"></b></span>
                                </a>
                            </li>
                            @can('manage-users', App\Models\User::class)
                                <li class="nav-item {{ $activeItem == 'user-management' ? ' active ' : '' }}">
                                    <a class="nav-link text-white {{ $activeItem == 'user-management' ? ' active ' : '' }}"
                                        href="{{ route('users') }}">
                                        <span class="sidenav-mini-icon"> UM </span>
                                        <span class="sidenav-normal ms-2 ps-1"> User Management <b class="caret"></b></span>
                                    </a>
                                </li>
                                <li class="nav-item {{ $activeItem == 'role-management' ? ' active ' : '' }}">
                                    <a class="nav-link text-white {{ $activeItem == 'role-management' ? ' active ' : '' }}"
                                        href="{{ route('roles') }}">
                                        <span class="sidenav-mini-icon"> RM </span>
                                        <span class="sidenav-normal ms-2 ps-1"> Role Management <b class="caret"></b></span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</aside>
