   
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container pt-2 pb-2">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="logo brand my-logo">
                            <a href="/" class="text-primary">Student Application System</a>
                        </div>
                    </div>

                    <div class="col-md-5 menu-main">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="/"><i class="ti-dashboard"></i><span>Home</span></a>                                        
                                    </li>
                                    
                                    <li class="{{ urlHasPrefix('layanan') ? 'active' : '' }}">
                                        <a href=""><i class="fa fa-institution"></i><span>Universities</span></a>
                                        <ul class="submenu">
                                            @foreach(listUniversities() as $list_menu)
                                            <li><a href="{{ route('university.programme', $list_menu->id) }}">{{ $list_menu->university_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    @guest('web')
                    <!-- Jika tidak login -->
                    <div class="col-md-2 text-right header-login-btn">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">
                            Login
                        </a>
                    </div>
                    <div class="col-md-1 header-register-btn">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                            Register
                        </a>
                    </div>
                    
                    @else
                    <!-- Jika Login -->
                    <div class="col-md-3 clearfix text-right">
                        <div class="d-md-inline-block d-block">
                            
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ ucwords(Auth::user()->name) }} <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(59px, 45px, 0px); top: 0px; left: 0px; will-change: transform;">                            
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endguest
                    
                    
                    

                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        
                    </div>
                   
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->



       
        

