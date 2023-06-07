<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services__details__thumb">
                    <img src=" {{ asset($portfolio->portfolio_image) }} " alt="">
                </div>
                <div class="services__details__content">
                    <h2 class="title">{{ $portfolio->portfolio_title }}</h2>
                    <p> {!! $portfolio->portfolio_description !!} </p>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
<section class="about about__style__two"></section>