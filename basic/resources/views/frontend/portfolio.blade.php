@extends('frontend.main_master')
@section('main')

@section('title')
    Portfolio | Bartek
@endsection

<main>

@include('frontend.portfolio_all.breadcrumb')

@include('frontend.portfolio_all.portfolio')

@include('frontend.home_all.home_project_info')

</main>

@endsection