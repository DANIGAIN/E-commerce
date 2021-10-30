<!DOCTYPE html>
<html class="no-js" lang="en">

    @include('front.include.head')

    <body class="body-class home-page">
       <!-- pre-loder-area area start here  -->
         <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div> 
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
        @include('front.include.header')
      <!--  include('front.include.mobil_header')-->
        
        <!-- offcanvase menu area start here  -->
        <div class="panel-backdrop "></div>
        @include('front.include.offcanvase')
        <!-- offcanvase menu area end here  -->
        <!-- slider two area start here  -->
        <!--include('front.include.slider')
           slider two area end here  -->
        <!-- Product Categories area start here  -->
       <!-- include('front.include.product_catagory')-->
        <!-- Product Categories area end here  -->
        <!-- Product Categories area start here  -->
        @yield('content')
        <!-- New Arrivals area end here  -->
        <!-- blog area start here  -->
      @include('front.include.blog_area')
        <!-- blog area end here  -->
       @include('front.include.footer')
        <!-- footer area end here  -->
        <!-- Modal -->
        @include('front.include.model')
        <!-- Modal end -->
        
       @include('front.include.js')
    </body>
</html>
