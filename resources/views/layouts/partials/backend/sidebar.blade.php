<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @foreach (config('variables.menus') as $key => $menu)
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ $menu['url'] == null ? 'void:javascript(0)' : route($menu['url']) }}" data-toggle="{{ $menu['submenu'] == null ? '' : 'collapse' }}" data-target="#{{ $key }}" aria-expanded="true"
                aria-controls="{{ $key }}">
                {!! $menu['icon'] !!}
                <span>{{ $menu['name'] }}</span>
            </a>
            @if ($menu['submenu'])
                <div id="{{ $key }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý {{ $menu['name'] }}:</h6>
                        @foreach ($menu['submenu'] as $submenu)
                            <a class="collapse-item" href="{{ $submenu['url'] == null ? 'void:javascript(0)' : route($submenu['url']) }}">{{ $submenu['name'] }}</a>
                        @endforeach
                    </div>
                </div>
            @endif
        </li>
    @endforeach
</ul>
<!-- End of Sidebar -->