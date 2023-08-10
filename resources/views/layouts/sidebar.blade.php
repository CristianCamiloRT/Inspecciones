<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Inspector +</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menú
            </li>

            <!-- <li class="sidebar-item active">
                <a class="sidebar-link" href="index.html">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li> -->

            <li class="sidebar-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <x-nav-link :href="route('users.index')">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{ __('Usuarios') }}</span>
                </x-nav-link>
            </li>

            <li class="sidebar-item {{ request()->routeIs('roles.*') ? 'active' : '' }}">
                <x-nav-link :href="route('roles.index')">
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">{{ __('Roles') }}</span>
                </x-nav-link>
            </li>
            
            <li class="sidebar-item {{ request()->routeIs('inspections.*') ? 'active' : '' }}">
                <x-nav-link :href="route('inspections.index')">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">{{ __('Inspecciones') }}</span>
                </x-nav-link>
            </li>
        </ul>
    </div>
</nav>