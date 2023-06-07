@extends('frontend.main_master')
@section('main')

@section('title')
    About | Bartek
@endsection

<main>

@include('frontend.about_all.breadcrumb')


@include('frontend.about_all.about')


@include('frontend.home_all.home_project_info')


</main>

@endsection