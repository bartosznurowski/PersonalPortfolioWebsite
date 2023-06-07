<section class="about about__style__two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about__image">
                    <img src="{{ $aboutpage->about_image }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">About me</span>
                        <h2 class="title">{{ $aboutpage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p><span>{{ $aboutpage->short_title }}</span></p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutpage->short_description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about about__style__two"></section>