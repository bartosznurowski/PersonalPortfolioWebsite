@php
    $allMultiImage = App\Models\MultiImage::all();
@endphp

<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title"> {{ $categoryname->blog_category }} </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $categoryname->blog_category }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            @foreach($allMultiImage as $item)
                <li>
                    <img src="{{ asset($item->multi_image) }}" alt="">
                </li>
            @endforeach
        </ul>
    </div>
</section>