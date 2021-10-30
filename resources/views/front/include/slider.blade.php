<section class="slider-two-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="slider-two-slide">
                            
                            @foreach($brands as $brand)
                            <div class="single-slide" style=" background: url('{{asset($brand->background_image)}}') no-repeat center / cover;">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="banner-image">


                                            <img src="{{asset($brand->banner)}}" alt="banner">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-7 ">
                                       <div class="banner-content">
                                            <h1>{{$brand->hadding1}}</h1>
                                            <h2>{{$brand->hadding2}}</h2>
                                            <p>{{$brand->title}}</p>
                                            <a href="#" class="banner-btn">Shop Now</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>