@extends('layouts.website.default')
@section('content')
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <img class="hero-image" src="{{asset('assets/website-images/hero.svg')}}" alt="image">
    <div class="hero-form-section centered">
        <form>
            <div class="form-group left-inner-addon">
                <img src="{{asset('assets/website-images/flag.svg')}}" alt="icon">
                <div class="phone-extension">+93</div>
               <input type="text" class="form-control"  placeholder="" value="">
            </div>
            <button type="submit" class="btn form-control">Start Top-up</button>
          </form>
    </div>
</div>
<div class="container-fluid service-section">
    <img class="service-section-bg" src="{{asset('assets/website-images/service-bg.svg')}}" alt="image">
    <div class="service-heading">
        <h1>Why Choose Us</h1>
    </div>
    <div class="service-list">
       <div class="service-inner-list">
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/clock-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Fast</p>
                    <p>Top-Up</p>
                </div>
            </div>
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/safety-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Safety</p>
                    <p>Top-Up</p>
                </div>
            </div>
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/satisfied-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Satisfied</p>
                    <p>Top-Up</p>
                </div>
            </div>
       </div>
    </div>
</div>
{{-- @include('includes.website.footer-navbar') --}}
@endsection
@section('insertjavascript')
@endsection