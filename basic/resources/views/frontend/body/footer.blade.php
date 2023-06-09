@php
    $allfooter = App\Models\Footer::find(1);
@endphp

<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <div class="footer__widget">
                <div class="fw-title">
                    <h5 class="sub-title">Contact me</h5>
                    <h4 class="title">{{ $allfooter->number }}</h4>
                    <div class="footer__widget__address">
                        <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                    </div>
                </div>
                <div class="footer__widget__text">
                    <p>{{ $allfooter->short_description }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer__widget">
                <div class="fw-title">
                    <h5 class="sub-title">My Address</h5>
                    <h4 class="title">{{ $allfooter->address }}</h4>
                </div>
            </div>
        </div>      
    </div>
</div>