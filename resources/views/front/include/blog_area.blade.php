
@if( isset($page) && $page == 'home')
<section class="blog-area home-two-blog mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-wrap">
                            <div class="top-section">
                                <h2 class="section-title">Our Latest Blog</h2>
                            </div>
                            <div class="blog-list blog-slide m-b-30">  

                                @if(isset($blogs))

                                @foreach($blogs as $blog)
                                <article  class="single-post">
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="{{asset($blog->image)}}" alt="blog" />
                                        </a>
                                        <span class="blog-date">{{$blog->created_at}}</span>
                                    </div>
                                    <div class="post-info">
                                        <ul class="post-meta">
                                            <li class="author">
                                                <a href="#"><i class="far fa-user"></i>{{$blog->author}}</a>
                                            </li>
                                            <li class="comments">
                                                <a href="#"><i class="far fa-comments"></i>{{$blog->comment}} Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="post-title">
                                            <a href="single-blog.html">{{$blog->hadding}} </a>
                                        </h2>
                                        <p class="post-content">{{$blog->discription}}</p>
                                        <a href="single-blog.html" class="post-btn">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                                 @endforeach 
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endif