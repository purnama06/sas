        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo brand">
                    <a href="{{ route('dashboard') }}">SAS</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            
                            <li class="{{ (urlHasPrefix('dashboard') == true ) ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}"><i class="ti-dashboard"></i><span>Dashboard</span></a>                               
                            </li>

                            <!-- sas admin menu -->
                            @if(Auth::user()->level == 0)
                            <li class="{{ (urlHasPrefix('qualification') == true ) ? 'active' : '' }}">
                                <a href="{{ route('qualification.index') }}" ><i class="ti-list"></i><span>Qualification</span></a>                               
                            </li>
                            <li class="{{ (urlHasPrefix('university') == true ) ? 'active' : '' }}">
                                <a href="{{ route('university.index') }}" ><i class="fa fa-institution"></i><span>University</span></a>                               
                            </li>
                            <li class="{{ (urlHasPrefix('user') == true ) ? 'active' : '' }}">
                                <a href="{{ route('user.index') }}" ><i class="fa fa-users"></i><span>University Admin</span></a>                               
                            </li>
                            @endif

                            <!-- admin univ menu -->
                            @if(Auth::user()->level == 1)
                            <li class="{{ (urlHasPrefix('programme') == true ) ? 'active' : '' }}">
                                <a href="{{ route('programme.index') }}" ><i class="fa fa-table"></i><span>Programmes</span></a>                               
                            </li>
                            @endif

                        </ul>
                      
                            
                    
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->