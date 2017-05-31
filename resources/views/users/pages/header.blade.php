<nav class="navbar  navbar-fixed-top  " role="navigation">
            <div class="container ">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="users/img/logo.png" >
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul class="nav main-nav  navbar-nav clear navbar-right ">
                            <?php
                                $menu = DB::table('menu_top')->orderBy('numbers','ASC')->take(6)->get();
                            ?>
                            @foreach($menu as $row_menu)
                            <li><a style="padding-top: 33px;" navactive class="color_animation" href="#{{$row_menu->alias}}">{{$row_menu->title}}</a></li>
                            
                            @endforeach
                            <li>
                            <div style="padding-top: 34px;" class="color_animation">
                             <i style="color:#dab33e"   class="fa fa-facebook" aria-hidden="true"></i>
                             <i style="color:#dab33e"  class="fa fa-youtube" aria-hidden="true"></i>
                             <i style="color:#dab33e" class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="home" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-10 col-md-offset-1">
                    <p class="top-title"> the right ingredients for the right food</p>
                    <img src="users/images/restaurant_03.png" class="white second-title clear">
                </div>
                <div class="col-md-6 col-md-offset-3" style="padding-top: 30px;">
                <div class="row" style="padding-left: 33px;">
                    <div  id="bg_header" class="br_header col-md-4" style=" margin-left:11%">
                         <a style="text-decoration: none;"  href="#reservations"><p style="color: #ffffff; margin-top: 18px;" >BOOK A TABLE</p></a>
                    </div>
                    <div id="bg_header" class="br_header col-md-4" style=" margin-left:5%; ">
                         <a style="text-decoration: none;"  href="#menu"> <p style="color: #ffffff; margin-top: 18px;" >SEE THE MENU</p></a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
