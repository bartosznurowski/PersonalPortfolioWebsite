<section class="portfolio__inner">
    <div class="container">
        <div class="portfolio__inner__active">
            @foreach($portfolio as $item)
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="{{ route('portfolio.details',$item->id)}}">
                                    <img src="{{ asset($item->portfolio_image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="{{ route('portfolio.details',$item->id)}}">{{$item->portfolio_title}}</a></h2>
                                    <p>{!! Str::limit($item->portfolio_description, 200) !!}  </p>
                                <a href="{{ route('portfolio.details',$item->id)}}" class="link">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="about about__style__two"></section>