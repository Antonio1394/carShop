<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li class="@yield('dashboardMenu', 'default')">
                    <a href="{{url('/admin')}}" class="waves-effect @yield('dashboardMenu', 'default')"><i class="ti-home"></i> <span> Inicio </span> </a>
                </li>
                <li class="has_sub">
                  <a href="#" class="waves-effect">
                    <i class="ti-light-bulb"></i>
                    <span>Vehiculos</span>
                  </a>
                  <ul class="list-unstyled" style="display: none;">
                    <li class="@yield('agentMenu', 'default')">
                        <a href="{{ url('admin/vehiculos') }}" class="waves-effect @yield('agentMenu', 'default')"><i class="fa fa-user-secret"></i> <span>Listado</span> </a>
                    </li>

                    <li class="@yield('suspendingMenu', 'default')">
                        <a href="{{ url('admin/agents/showSuspending') }}" class="waves-effect @yield('suspendingMenu', 'default')"><i class="fa fa-minus-square"></i> <span>Suspendidos </span> </a>
                    </li>

                    <li class="@yield('breakMenu', 'default')">
                        <a href="{{ url('admin/agents/showBreak') }}" class="waves-effect @yield('breakMenu', 'default')"><i class="md-brightness-3"></i> <span>Descanso </span> </a>
                    </li>
                  </ul>

                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Left Sidebar End -->
