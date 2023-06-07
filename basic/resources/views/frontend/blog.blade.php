@extends('frontend.main_master')
@section('main')

@section('title')
    Blog | Bartek
@endsection

<main>

@include('frontend.blog_all.breadcrumb')

@include('frontend.blog_all.blog')

@include('frontend.home_all.home_project_info')

</main>

@endsection