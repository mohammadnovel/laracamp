<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                </li>

                <li class="sidebar-item mt-2">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.index') }}" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
                </li>

                @can('user.view', 'permission.view', 'role.view')
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false">
                            <i class="mdi mdi-account-multiple"></i>
                            <span class="hide-menu">User </span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            @can('user.view')
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.user.index') }}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> User List </span>
                                    </a>
                                </li>
                            @endcan

                            @can('permission.view')
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.permission.index') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i><span class="hide-menu">User Permission</span>
                                    </a>
                                </li>
                            @endcan

                            @can('role.view')
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.role.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-adjust"></i><span class="hide-menu">User Role</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('marketplace.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.marketplace.index') }}" class="sidebar-link">
                            <i class="mdi mdi-garage-open"></i>
                            <span class="hide-menu"> Marketplace </span>
                        </a>
                    </li>
                @endcan

                {{-- @can('article.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.article.index') }}" class="sidebar-link">
                            <i class="mdi mdi-note"></i>
                            <span class="hide-menu"> Article </span>
                        </a>
                    </li>
                @endcan --}}
                
                @can('product.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.product.index') }}" class="sidebar-link">
                            <i class="mdi mdi-cube"></i>
                            <span class="hide-menu"> Product </span>
                        </a>
                    </li>
                @endcan

                @can('location.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.location.index') }}" class="sidebar-link">
                            <i class="mdi mdi-map"></i>
                            <span class="hide-menu"> Location </span>
                        </a>
                    </li>
                @endcan

                {{-- Payment Method --}}
                @can('payment-method.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.payment-method.index') }}" class="sidebar-link">
                            <i class="mdi mdi-wallet"></i>
                            <span class="hide-menu">Payment Method </span>
                        </a>
                    </li>
                @endcan
                {{-- Tour Category --}}

                @can('tour-category.view')
                    <li class="sidebar-item">
                        <a href="{{ route('admin.tour-category.index') }}" class="sidebar-link">
                            <i class="mdi mdi-arrange-send-backward"></i>
                            <span class="hide-menu">Tour category </span>
                        </a>
                    </li>
                @endcan
                
                
            </ul>
        </nav>
    </div>
</aside>
