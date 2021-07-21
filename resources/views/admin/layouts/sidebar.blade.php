<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <h5 class="c-sidebar-brand-full">
            <a class="c-header-brand" style="color: #FFFFFF; text-decoration: none" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
        </h5>
        <h5 class="c-sidebar-brand-minimized">IS</h5>
    </div>
    <ul class="c-sidebar-nav">

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-index') }}">
                <i class="fa fa-dashboard c-sidebar-nav-icon"></i>
                Главная
            </a>
        </li>

{{--        @canAtLeast('directories.view')--}}
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->is('directories/*') ? 'c-show' : '' }}">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa fa-list c-sidebar-nav-icon"></i>
                Страницы
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('companies-*') ? 'c-active' : '' }}" href="{{ route('main-index') }}">
                        Главная страница
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('departments-*') ? 'c-active' : '' }}" href="{{ route('stock-index') }}">
                        Акции
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('positions-*') ? 'c-active' : '' }}" href="{{ route('cinema-index') }}">
                        Кино
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('positions-*') ? 'c-active' : '' }}" href="{{ route('service-index') }}">
                        Услуги
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('brands-*') ? 'c-active' : '' }}" href="{{ route('gallery-index') }}">
                        Галлерея
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('class-types-*') ? 'c-active' : '' }}" href="{{ route('contact-index') }}">
                        Контакты
                    </a>
                </li>
            </ul>
        </li>
{{--        @endCanAtLeast--}}


{{--        @canAtLeast(['permissions.view', 'permissions.roles'])--}}
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown {{ request()->is('acl/*') ? 'c-show' : '' }}">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa fa-shield c-sidebar-nav-icon"></i>
                Контроль доступа
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('permission-*') ? 'c-active' : '' }}" href="{{ route('permissions') }}">
                        Разрешения
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ Route::is('role-*') ? 'c-active' : '' }}" href="{{ route('roles') }}">
                        Роли
                    </a>
                </li>
            </ul>
        </li>
{{--        @endCanAtLeast--}}

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler d-none" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
