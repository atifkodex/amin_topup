@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
    .amount-section {
        background: #F0F7FF;
        border-radius: 16px;
    }

    .lefts-polygon-two,
    .left-polygon-blue,
    .right-polygon-orange,
    .rights-polygon-two {
        display: none
    }

    @media screen and (min-width:768px) {
        .lefts-polygon-two {
            position: absolute;
            bottom: 0% !important;
            left: 0% !important;
            width: 13%;
            z-index: -1;
            display: block;
        }

        .rights-polygon-two {
            position: absolute;
            bottom: 0% !important;
            right: 16px;
            width: 11% !important;
            z-index: 1;
            display: block;
        }

        .left-polygon-blue {
            position: absolute;
            top: 8% !important;
            left: 0% !important;
            width: 8%;
            / z-index: -1;/ display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            / z-index: -1;/ display: block;
        }

    }

    .inner-wrapper {
        position: relative;
    }

    .info-section-two {
        position: relative;
    }
</style>
@section('content')
@include('includes.website.navbar')
<!-- <div class="container-fluid  px-0 outer-wrapper">
    <div class="inner-wrapper inner-wrapper-main">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="detail-box-outer pt-5  px-3">
            <div class="detail-box amount-box">
                <div class="main-form-section-content pb-4">
                    <h1>Your <span>Details</span></h1>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1 class="receiverNumber_d">{{$number}}</h1>

                    </div>
                    <div class="network-button pl-2 pl-lg-5">
                        <button data-toggle="modal" data-target="#email-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
                    </div>

                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{$data->operator_image}}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1>{{$data->operator_name}}</h1>

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1 id="receiverName_d">Amin Top-Up</h1>

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex amin-gmail">
                        <h1 id="receiverEmail_d">amintopup@gmail.com</h1>

                    </div>
                </div>


            </div>
            <div class="detail-box-bottom text-right invisible">
                <h1>250 <span>AFN</span></h1>
            </div>
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

    </div>
    <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
    <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
</div>
<div class="info-section-two container-fluid px-0  pb-5">
    <div class="amount-section  container">
        <div class="row">
            <div class="col-md-12">
                <div class="amount-heading col-12 col-lg-6 px-0">
                    <h1>Choose an amount to <span>continue</span></h1>
                </div>
            </div>
            @foreach($data->details as $amounts)
            <div class="col-md-6 py-3">
                <a href="javascript:void(0)" class="selectAmount_d">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1 data-src="{{$amounts->denomination}}" class="denominationAmount_d">{{$amounts->denomination}} AFN</h1>
                        <p>${{$amounts->processing_fee}} fee,total: ${{$amounts->totalAmount}}</p>
                    </div>
                    <form action="{{route('orderSummary')}}" class="goToSummaryForm_d" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" class="inputNum_d" name="number" value="">
                    </form>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-md-6 py-3">
                    <a href="{{url('login')}}">
            <div class="amount-card">
                <p>Recevier:befor AIT</p>
                <h1>100 AFN</h1>
                <p>Free fee,total: $7.46USD</p>
            </div>
            </a>

        </div>
        <div class="col-md-6 py-3">
            <a href="{{url('login')}}">
                <div class="amount-card">
                    <p>Recevier:befor AIT</p>
                    <h1>100 AFN</h1>
                    <p>Free fee,total: $7.46USD</p>
                </div>
            </a>

        </div>
        <div class="col-md-6 py-3">
            <a href="{{url('login')}}">
                <div class="amount-card">
                    <p>Recevier:befor AIT</p>
                    <h1>100 AFN</h1>
                    <p>Free fee,total: $7.46USD</p>
                </div>
            </a>

        </div>
        <div class="col-md-6 py-3">
            <a href="{{url('login')}}">
                <div class="amount-card active">
                    <p>Recevier:befor AIT</p>
                    <h1>100 AFN</h1>
                    <p>Free fee,total: $7.46USD</p>
                </div>
            </a>

        </div>
        <div class="col-md-6 py-3">
            <a href="{{url('login')}}">
                <div class="amount-card">
                    <p>Recevier:befor AIT</p>
                    <h1>100 AFN</h1>
                    <p>Free fee,total: $7.46USD</p>
                </div>
            </a>

        </div> --}}

    </div>
</div>
<img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
<img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
</div>
<div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4" method="POST" action="{{route('number-detail')}}">
                    @csrf
                    <div class="form-group form-field right-inner">
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="number" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <button type="submit" class="updateNumModal">Update</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading container">
            <h1>Your</h1>
            <h1>Details</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>
<div class="info-section-two container-fluid px-0 ">
    <div class="amount-section  container mb-5">
        <div class="pt-5">
            <div class="detail-box amount-box my-3">

                <div class="network-list mb-1 d-flex align-items-center justify-content-between pb-3">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item  amin-gmail">
                        <h1 class="receiverNumber_d">{{$number}}</h1>
                    </div>
                    <div class="network-button network-item text-right">
                        <button data-toggle="modal" data-target="#number-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
                    </div>

                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{$data->operator_image}}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1>{{$data->operator_name}}</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1 id="receiverName_d">Amin Top-Up</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text  amin-gmail network-item">
                        <h1 id="receiverEmail_d">amintopup@gmail.com</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>



            </div>

        </div>
        <div class="row">
            <div class="col-12 col-sm-8">
                <div class="amount-heading  px-0" style="margin-left:0px">
                    <h1>Choose an amount to <span>continue</span></h1>
                </div>
            </div>
            @foreach($data->details as $amounts)
            <div class="col-md-6 py-3">
                <a href="javascript:void(0)" class="selectAmount_d">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1 data-src="{{$amounts->denomination}}" class="denominationAmount_d">{{$amounts->denomination}} AFN</h1>
                        <p>${{$amounts->processing_fee}} fee,total: ${{$amounts->totalAmount}}</p>
                    </div>
                    <form action="{{route('orderSummary')}}" class="goToSummaryForm_d" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" class="inputNum_d" name="number" value="">
                    </form>
                </a>
            </div>
            @endforeach


        </div>
    </div>
    <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
    <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
    <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
</div>
<div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4" method="POST" action="{{route('number-detail')}}">
                    @csrf
                    <div class="form-group form-field right-inner">
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="number" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <button type="submit" class="updateNumModal">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">

                <form class="py-2 py-sm-4">
                    <h1>Your <span>Details</span> </h1>
                    <div class="form-group form-field right-inner">

                        <input type="text" class="form-control" aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <a href="#" class="btn mt-sm-3 email-modal-btn">Update</a>
                </form>
            </div>
        </div>
    </div>
</div> -->
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    $(".hero-section").css("margin-bottom", "10%");
</script>
<script>
    $receiverName = localStorage.getItem('receiverName');
    $receiverEmail = localStorage.getItem('receiverEmail');
    console.log($receiverEmail + $receiverName);
    $("#receiverName_d").text($receiverName);
    $("#receiverEmail_d").text($receiverEmail);

    $(".selectAmount_d").click(function() {
        let denomination = $(this).find('.denominationAmount_d').attr('data-src');
        localStorage.setItem('denomination', denomination);
        let num = $('.receiverNumber_d').text();
        $('.inputNum_d').val(num);
        $(this).find('.goToSummaryForm_d').submit();

    });
</script>
@endsection