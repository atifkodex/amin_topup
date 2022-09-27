@extends('layouts.website.default')
@section('content')
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <img src="{{asset('assets/website-images/hero.svg')}}" alt="image">

</div>
  
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
@endsection