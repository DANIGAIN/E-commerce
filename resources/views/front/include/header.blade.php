<header class="header-area header-v2">
            <!-- top bar area start here  -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center text-md-left">
                            <div class="topbar-left">
                                <ul class="social-meida">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 text-center text-md-right">
                            <div class="topbar-right ">
                                <ul>
                                  <li class="account dropdown">
                                        <a href="#"> <i class="user-icon fas fa-user-circle"></i> Account <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            @if(Auth::check())
                                                 <li>{{Auth::user()->name}}</li>
                                                 <li><a href="{{route('user.logout')}}">Logout</a></li>
                                                

                                                    @if(Auth::user()->role == 1)
                                                        <li><a href="">Admin</a></li>
                                                    @endif
                                                
                                            @else                                            
                                                <li><a href="{{route('user.login')}}">log in </a></li>
                                                <li><a href="{{route('user.signup')}}">Sign Up</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li class="currancy dropdown">
                                        <a href="#">USD <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">INR</a></li>
                                            <li><a href="#">BTD</a></li>
                                        </ul>
                                    </li>
                                    <li class="language dropdown">
                                        <a href="#"> <img src="{{asset('front/asset/images/flag.png')}}" alt="flag"> English <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            <li><a href="#"><img src="{{asset('front/asset/images/flag.png')}}" alt="flag"> English</a></li>
                                            <li><a href="#"><img src="{{asset('front/asset/images/flag.png')}}" alt="flag"> Dautch</a></li>
                                            <li><a href="#"><img src="{{asset('front/asset/images/flag.png')}}" alt="flag"> Hindi</a></li>
                                            <li><a href="#"><img src="{{asset('front/asset/images/flag.png')}}" alt="flag"> Bangla</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top bar area end here  -->
            <!-- header-middle-aera star here   -->
            <div class="header-middle-area">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6 order-0 order-lg-1">
                            <div class="brand-area">
                                <a href="index.html"><img src="{{asset('front/asset/images/logo1.png')}}" alt="Woomart" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6  order-2 order-lg-2">
                            <div class="search-area">
                                <form action="#">
                                    <div class="search-wrap">
                                        <select class="niceselect selct-area search-item">
                                            <option data-display="Product Categories">Product Categories</option>
                                            <option value="1">Product Categories</option>
                                            <option value="2">Wooman's Categories</option>
                                            <option value="3">Man's Categories</option>
                                            <option value="4">Home Categories</option>
                                        </select>
                                        <div class="form-group search-item-wraper search-item m-0">
                                            <input type="text" class="search-input" id="search" name="%s" placeholder="Search Product..." autocomplete="off" />
                                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                            <ul class="autocomplite-box">
                                                <li>Wooman </li>
                                                <li>Man </li>
                                                <li>babye</li>
                                                <li>shart</li>
                                                <li>pant</li>
                                                <li>show</li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 order-1 order-lg-3">
                            <div class="middle-right">
                                <ul>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i> <span class="count">1</span> </a>    
                                    </li>
                                    <li>
                                        <a href="{{route('show.cart')}}">
                                            <i class="flaticon-shopping-cart-empty-side-view"></i>
                                            <spcategorysan class="count">{{CartCount()}}</span>
                                        </a>
                                        <span class="card-amount">My Cart - ${{totalcost(CartAmount(),totaltax(CartAmount() ,5),50)}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-aera star here   -->
            <!-- header bottom area  start here  -->
            @if( isset($page) && $page == 'home')
              <div class="header-botom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="categories-list-v2 ">
                                <h3 class="catagory-name"><i class="fas fa-bars"></i> All Categories </h3>
                                  <ul class="catagory-items">
                                   
                                    @php($i = 0)

                                        @foreach($info['category']->reverse() as $category)
                                            @php($i++)
                                                  <li class="has-catagory-submenu">
                                                   <a href="#"><img src="{{asset($category->icon)}}" alt="icon" /> {{$category ->name}}
                                                          @if(isset($category->subcetagory[0]))

                                                               <i class="fas fa-angle-right float-right"></i></a>
                                                                <ul class="catagory-submenu-lsit">
                                                                     @foreach($category->subcetagory as $subcetagory)  
                                                                           <li><a class="catagory-title" href="#">{{$subcetagory->name}}</a></li>
                                                                      @endforeach
                                              
                                           
                                                                </ul>
                                                          @endif  
                                                    </li>
                                             @if($i == 10)
                                             <?php break ;?>
                                            @endif

                                        @endforeach
                                   
                                     
                                    
                                   

                                

                                </ul>
                            </div>
                            <a id="menu-bars" class="text-right d-block d-md-none" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-lg-9 col-md-9 text-left text-md-right">
                            <nav class="main-menu-area">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu-items">
                                            <li><a href="index.html">home v1</a></li>
                                            <li><a href="index2.html">home v2</a></li>
                                            <li><a href="index3.html">home v3</a></li>
                                            <li><a href="index4.html">home v4</a></li>
                                            <li><a href="index5.html">home v5</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-itms position-static">
                                        <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu row">
                                         @if( isset($page) && $page == 'home')    
                                         <?php $i= 0 ; $j = 0 ; ?>
                                          @foreach($info['big_menu']->reverse() as $category)
                                           <?php $i++?>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">{{$category->name}}</a></li>
                                                    @if(isset($category->subcetagory[0]))
                                                        @foreach($category->subcetagory->reverse() as $subcetagory)
                                                               <?php $j++;?>

                                                                   <li><a href="#">{{$subcetagory->name}}</a></li>
                                                                @if($j == 5 )
                                                                     <?php break ;?>

                                                                @endif 
                                                        @endforeach
                                                    @endif
                                                    
                                                </ul>                                                                                            
                                            </li>
                                             @if($i== 4)
                                                  <?php break ?>
                                             @endif
                                            @endforeach
                                        
                                            <li class="col-12 brad-logo-area">
                                                <?php $i = 0 ;?>
                                                @foreach($brands as $brand )
                                                       <?php $i++; ?>
                                                             <div><a href="#"><img src="{{asset($brand->image)}}" alt="clients_logo" /></a></div>
                                                        @if($i == 5 )
                                                             <?php break ;?>
                                                        @endif

                                                @endforeach 
                                               
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu-items">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="single-shop.html">shop details</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">blog details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="order-track.html">order track</a></li>
                                            <li><a href="sign-in.html">sign in</a></li>
                                            <li><a href="sign-up.html">sign up</a></li>
                                            <li><a href="reset-password.html">reset password</a></li>
                                            <li><a href="terms-conditions.html">terms conditions</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
              </div>
             @endif
            <!-- header bottom area  end here  -->
        </header>


        <!-- header area end here  -->
        <!-- mobile-header-area start here  -->
        <div class="mobile-header-area">
            <div class="mobile-header-top">
                <ul class="social-meida">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="mobile-header-bottom">
                <div class="menu-bar">
                    <a href="#" class="menu-bars">
                        <span class="bar-line"></span>
                        <span class="menu-text">menu</span>
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html"><img src="{{asset('front/asset/images/woomart.png')}}" alt="woomart" /></a>
                </div>
                <div class="icon-bar">
                    <a class="search-open" href="#"><i class="fa fa-search"></i></a>
                    <a class="cart" href="cart.html"><i class="fas fa-shopping-cart"></i> <span class="cart-number">0</span> </a>
                </div>
            </div>
            <div class="mobile-search-area">
                <div class="mobile-search-form">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile-search" name="%s" placeholder="Search Product..." autocomplete="off" />
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            <ul class="autocomplite-box">
                                <li>Wooman </li>
                                <li>Man </li>
                                <li>babye</li>
                                <li>shart</li>
                                <li>pant</li>
                                <li>show</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- mobile-header-area end here  -->