@extends('frontend.main_master')
@section('main')

@section('title')
    Home | Bartek
@endsection

@include('frontend.home_all.home_slide')

@include('frontend.home_all.home_about')

@include('frontend.home_all.portfolio')

@include('frontend.home_all.home_blog')

@include('frontend.home_all.home_project_info')

@endsection