@extends('layouts.frontbase')
 
@section('title', 'Fathi')

@section('content')
@include('home.sections.carousel')
@include('home.sections.featured')
@include('home.sections.categories')
@include('home.sections.products')
@include('home.sections.offer')
@include('home.sections.recentproduct')
@include('home.sections.vendor')
@include('home.sections.footer')




@endsection