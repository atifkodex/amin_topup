@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
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

    .amount-section {
        background: #F0F7FF;
        border-radius: 16px;
    }

    .inner-wrapper {
        position: relative;
    }

    @media screen and (min-width:768px) {

        .inner-wrapper-main {
            padding-bottom: 80px !important;
        }

        .form-heading h1 {
            font-size: 30px !important;
            color: white
        }

    }

    .form-heading h1 {
        font-size: 25px;
        color: white
    }

    @media screen and (min-width:1396px) {
        .rec-section {
            margin-bottom: 300px !important;
        }
    }

    @media screen and (min-width:768px)and (max-width:1397px) {
        .rec-section {
            margin-bottom: 35% !important;
        }
    }

    .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }

    .reg-box p {
        color: white !important;
    }

    .reg-box p a {
        background: transparent !important;
        box-shadow: none !important;
        border: none !important;
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

    .btnStyle_s {
        text-decoration: none !important;
        background-color: #F89822 !important;
        color: black !important;
        width: 100% !important;
        padding: 10px 0px !important;
        font-size: 26px !important;
        font-weight: bold !important;
    }

    .btnStyleModal_s {
        text-decoration: none !important;
        background-color: #F89822 !important;
        color: black !important;
        width: 50% !important;
        padding: 10px 0px !important;
        font-size: 20px !important;
        font-weight: bold !important;
        border: none !important;
        border-radius: 10px;
    }
</style>
@section('content')
@include('includes.website.navbar')

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
    <div class="amount-section container mb-5">
        <div class="pt-5">
            <div class="detail-box amount-box my-3">
                <div class="network-list mb-1 d-flex align-items-center justify-content-between pb-3">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1>{{$number}}</h1>

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
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="reg-box mb-4 mb-lg-5">
                    <form class="pt-2" id="receiverDetailForm_d" action="{{route('amountDetails')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-heading pt-1 pb-2  pb-md-4 pt-md-2">
                            <h1 class="text-left">Add Receiver Detail</h1>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show login-email-field showDetailError d-none" role="alert">
                            <b>Name</b> Field is Required.
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/person-icon.svg') }}" alt="icon">
                            <input type="text" class="form-control" name="name" id="receiverName_d" placeholder="enter receiver name">
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/message-icon.svg') }}">
                            <input type="email" class="form-control" id="receiverEmail_d" name="email" placeholder="enter receiver email">
                        </div>
                        <input type="hidden" name="number" value="{{$number}}">
                        <button class="btnStyle_s btn w-100 my-3 my-lg-4 continueReceiverDetailBtn_d">Continue</button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
</div>

<div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4" id="numModalForm_d" method="POST" action="{{route('number-detail')}}">
                    @csrf
                    <div class="alert alert-danger alert-dismissible fade show login-email-field showDetailErrorModal d-none" role="alert">
                        Enter a number from Afghanistan origin only!
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show login-email-field showDetailErrorModal2 d-none" role="alert">
                        Invalid Format! Must be between 9 or 12 digits!
                    </div>
                    <div class="form-group form-field right-inner">
                        <input type="number" class="form-control" aria-describedby="emailHelp" id="numInputModal_d" name="number" value="{{$number}}" placeholder="Type here">
                    </div>
                    <button class="updateNumModal btnStyleModal_s" id="updateNumModalBtn_d">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    $(document).ready(function() {
        $(".continueReceiverDetailBtn_d").click(function(e) {
            e.preventDefault();
            $('.showDetailError').addClass('d-none');
            $receiverName = $('#receiverName_d').val();
            $receiverEmail = $('#receiverEmail_d').val();
            if ($receiverName == '') {
                $('.showDetailError').removeClass('d-none');
            } else {
                localStorage.setItem('receiverName', $receiverName);
                localStorage.setItem('receiverEmail', $receiverEmail);
                $("#receiverDetailForm_d").submit();
            }
        });

        // Modal Num validation 
        $('#updateNumModalBtn_d').click(function(e) {
            e.preventDefault();
            $(".showDetailErrorModal").addClass('d-none');
            $(".showDetailErrorModal2").addClass('d-none');

            let enteredNum = $('#numInputModal_d').val();
            let response;
            if (enteredNum.length < 9 || enteredNum.length > 13) {
                $(".showDetailErrorModal").addClass('d-none');
                $(".showDetailErrorModal2").removeClass('d-none');
                response = 'false';
                return;
            }

            let checkNumberFour = String(enteredNum).slice(0, 4);
            let checkNumberthree = String(enteredNum).slice(0, 3);
            let checkNumberfive = String(enteredNum).slice(0, 5);
            if (checkNumberFour == '9307' || checkNumberfive == '93020') {
                enteredNum = enteredNum;
                response = 'true';
            } else if (checkNumberthree == '937' || checkNumberFour == '9320') {
                enteredNum = enteredNum;
                response = 'true';
            } else {
                enteredNum = 93 + enteredNum;
                let checkNumberFour = String(enteredNum).slice(0, 4);
                let checkNumberthree = String(enteredNum).slice(0, 3);
                let checkNumberfive = String(enteredNum).slice(0, 5);
                if (checkNumberFour == '9307' || checkNumberfive == '93020' || checkNumberthree == '937' || checkNumberFour == '9320') {
                    enteredNum = enteredNum;
                    response = 'true';
                } else {
                    $(".showDetailErrorModal").removeClass('d-none');
                    $(".showDetailErrorModal2").addClass('d-none');
                    response = 'false';
                    return;

                }
            }
            $("#numModalForm_d").submit();
        });
    });
</script>
@endsection