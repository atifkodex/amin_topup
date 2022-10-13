@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
    .reg-box {
        background: #FFFFFF !important;
        box-shadow: 0px 0px 13px 10px rgba(0, 0, 0, 0.09) !important;
        border-radius: 16px;
    }

    .form-field input:-webkit-autofill,
    .form-field input:-webkit-autofill:hover,
    .form-field input:-webkit-autofill:focus,
    .form-field input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px #F4F8FC inset !important;
    }

    .form-field input {
        background: #F4F8FC !important;
    }


    .info-section-two {
        position: relative;
    }


    .lefts-polygon-two,
    .left-polygon-blue,
    .right-polygon-orange,
    .rights-polygon-two {
        display: none
    }

    .right-inner {
        position: relative;

    }

    .right-inner img {
        position: absolute;
        right: 0px;
        padding: 12px 12px;
        width: 50px;
        z-index: 999;
        top: 5px;
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
            /* z-index: -1; */
            display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

    }

    .payTopupBtn {
        text-decoration: none !important;
        background-color: #001933 !important;
        color: white !important;
        width: 100% !important;
        padding: 14px 0px !important;
        font-size: 28px !important;
        font-weight: bold !important;
        outline: none !important;
        border: none !important;
    }
</style>
@section('content')
@include('includes.website.navbar')
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading container">
            <h1>Add Payment</h1>
            <h1>Information</h1>
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
<div class="info-section-two container-fluid px-0 my-3 my-md-2">
    <div class="amount-section container">
        <div class="row">
            <div class="col-12">
                <div class="reg-box my-0 my-md-5">
                    <form class="pt-2 pt-md-5" method="POST" enctype="multipart/form-data" action="{{route('payTopup')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12 py-2">
                                <div class="form-group form-field right-inner">
                                    <img src="{{ asset('assets/website-images/card-icon.svg') }}" alt="icon">
                                    <input type="text" class="form-control" name="card_name" placeholder="Name on card">
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group form-field right-inner">
                                    <img src="{{ asset('assets/website-images/card-icon.svg') }}" alt="icon">
                                    <input type="text" class="form-control" name="card_num" placeholder="card-number">
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group form-field right-inner">

                                    <input type="text" class="form-control" name="card_expiry_month" placeholder="Expiry month / 12">
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group form-field right-inner">

                                    <input type="text" class="form-control" name="card_expiry_year" placeholder="Expiry Year / 2025">
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="form-group form-field right-inner">
                                    <img src="{{ asset('assets/website-images/cvc-icon.svg') }}" alt="icon">
                                    <input type="text" class="form-control" name="card_cvc" placeholder="CVC">
                                </div>
                            </div>
                            <div class="col-12 py-2 pb-2 pb-md-5">
                                <button type="submit" class="payTopupBtn">Pay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
</div>
<div class="payment-modal modal fade" id="payment-error" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content payment-modal-content  pt-4">
            <div class="modal-body payment-modal-body  text-center py-3 py-md-5">
                <p>Unfortunately, Your Topup transaction was not successful due to</p>
                <p class="error-message">[Error Description]</p>
                <p>We will refund the payment to your card soon. You can try again later!</p>
                <button>Try Again</button>
            </div>
            <img class="modal-img" src="{{ asset('assets/website-images/error-modal.svg') }}" alt="image">
        </div>
    </div>
</div>
<div class="payment-modal modal fade" id="payment-success" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content payment-modal-content  pt-4">
            <div class="modal-body payment-modal-body  text-center py-5">
                <p class="success-message">Topup <span>successfully</span> sent to Ali.</p>
                <p>Thank you for using Amin Topup!</p>
            </div>
            <img class="modal-img" src="{{ asset('assets/website-images/success-modal.svg') }}" alt="image">
        </div>
    </div>
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    let amount = sessionStorage.getItem('dataArray');
    console.log(amount);
</script>
@endsection