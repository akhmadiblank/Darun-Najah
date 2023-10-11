<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap" class="absolute">
            <!-- Top Bar -->        
            <div id="top-bar">
                <div class="wrap-themesflat-container">
                    <div id="top-bar-inner" class="themesflat-container">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <span class="address content"><a href="#">Jl.Kamboja 01,Kec Kragan Kab Rembang,Jawa Tengah</a></span> 
                                <span class="phone content"><a href="#">Phone +62 852-2560-2598</a></span>
                            </div><!-- /.top-bar-content -->
    
                            <div class="top-bar-content-right">
                                <div class="top-bar-socials">
                                    <div class="inner">
                                        <span class="texts">Akun:</span>
                                        <span class="icons">
                                            <a href="#" title="Facebook">
                                                <span class="finance-icon-Facebook" aria-hidden="true"></span>
                                            </a>
                                            {{-- <a href="#" title="Twitter">
                                                <span class="finance-icon-Twitter" aria-hidden="true"></span>
                                            </a>
                                            <a href="#" title="Linkedin">
                                                <span class="flat-icon-linkedin" aria-hidden="true"></span>
                                            </a> --}}
                                            <a href="#" title="Instagram">
                                                <span class="flat-icon-instagram" aria-hidden="true"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div><!-- /.top-bar-socials -->
                            </div><!-- .top-bar-content-right -->
                        </div>
                    </div>
                </div><!-- /.wrap-themesflat-container -->
            </div><!-- /#top-bar -->
    
            <!-- Header -->
            @include('website.parts.header')
            <!-- /#site-header -->
        </div><!-- #site-header-wrap -->
    
        <!-- Main Content -->
        @yield('content')
        <!-- /#main-content -->
    
        <!-- Footer -->
       @include('website.parts.footer')
        <!-- /#footer -->
    
        <!-- Bottom -->
        <div id="bottom" class="clearfix style-1">
            <div id="bottom-bar-inner" class="themesflat-container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright" class="padding-left-9">
                            &copy; <a href="#">COPYRIGHT FINANCE</a>. DESIGN BY @DOANDU WITH LOVE.
                        </div><!-- /#copyright -->
                    </div><!-- /.bottom-bar-content -->
    
                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li class="menu-item"><a href="#">About Us</a></li>
                            <li class="menu-item"><a href="#">Terms</a></li>
                            <li class="menu-item"><a href="#">Services</a></li>
                            <li class="menu-item"><a href="#">Contacts</a></li>
                        </ul>
                    </div><!-- /.bottom-bar-menu -->
                </div>
            </div>
        </div>
        <!-- /#bottom -->
    </div><!-- /#page -->
    </div><!-- /#wrapper -->