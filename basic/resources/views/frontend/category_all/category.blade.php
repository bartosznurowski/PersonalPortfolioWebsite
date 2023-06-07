<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($blogpost as $item)
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <a href="blog-details.html"><img src="{{ asset($item->blog_image) }}" alt=""></a>
                            <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                        <div class="standard__blog__content">
                            <h2 class="title"><a href="{{ route('blog.details',$item->id) }}">{{$item->blog_title}}</a></h2>
                            <p>{!! Str::limit($item->blog_description, 200) !!}</p>
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach 
            </div>
    <div class="col-lg-4">
        <aside class="blog__sidebar">
            <div class="widget">
                <h4 class="widget-title">Recent Blog</h4>
                <ul class="rc__post">
                    @foreach($allblogs as $all )
                    <li class="rc__post__item">
                        <div class="rc__post__thumb">
                            <a href="{{ route('blog.details',$all->id) }}"><img src="{{ asset($all->blog_image) }} " alt=""></a>
                        </div>
                        <div class="rc__post__content">
                            <h5 class="title"><a href="{{ route('blog.details',$all->id) }}">{{ $all->blog_title }}
                                </a></h5>
                            <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }} </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="widget">
                <h4 class="widget-title">Categories</h4>
                <ul class="sidebar__cat">
                    @foreach($categories as $cat)
                        <li class="sidebar__cat__item"><a href="{{ route('category.blog',$cat->id) }}">{{ $cat->blog_category  }}  </a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
        </div>
    </div>
</div>
</section>
<section class="about about__style__two"></section>