@extends('layouts.website.default')
@section('content')
@include('includes.website.navbar')
<div class="container-fluid hero-section_s">
    <img src="{{asset('assets/website-images/hero.svg')}}" class="position-relative bgImage_s" alt="image">
    <div class="heroContent">
        <h1 class="yourDetail_s">Your <span class="yellowColor_s">Details</span></h1>
        <div class="d-flex align-items-center mt-5 numDiv_s">
            <div class="mr-5">
                <img width="90" class="img-fluid h-auto afghanImage_s" src="{{asset('assets/images/afghanistan_logo.svg')}}" alt="">
            </div>
            <span class="text-white mr-5 numText_s">93 70 00 00 000</span>
            <button class="editNmbrBtn_s rounded-pill px-5 py-1">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-white mr-2">Edit</span>
                    <img src="{{asset('assets/images/edit_pen_icon.svg')}}" alt="">
                </div>
            </button>
        </div>
        <div class="d-flex align-items-center mt-3">
            <div class="mr-5">
                <img  width="90" class="img-fluid networkImg_s h-auto" src="{{asset('assets/images/awcc.png')}}" alt="">
            </div>
            <span class="text-white networkText_s mr-3">AWCC</span>
            
        </div>
        <div class="receiverDetailCard_s px-3 py-4 mt-5">
            <h4 class="text-white">Add Receiver Details</h4>
            <form action="">
                @csrf 
                <div class="receiverNameDiv_s px-3 py-4">
                    <input type="text" class="receiverNameInput_s" placeholder="Enter Receiver Name">
                    <img src="{{asset('assets/images/profile_icon.svg')}}" alt="">
                </div>
                <div class="receiverEmailDiv_s px-3 py-4">
                    <input type="text" class="receiverEmailInput_s" placeholder="Enter Receiver Email">
                    <img src="{{asset('assets/images/mail_icon.svg')}}" alt="">
                </div>

                <button class="continueReceiverBtn_s py-3 mt-5" type="submit">
                    <span>Continue</span>
                </button>
            </form>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="row moneySection_s">
            <div class="col-5 px-0">
                <div class="moneyImageDiv_s">
                    <img class="moneyImage_s img-fluid" src="{{asset('assets/website-images/receiverDetaild3.svg')}}" alt="">
                </div>
            </div>
            <div class="col-5 px-0">
                <div class="moneyTextSection_s">
                    <h2 class="moneyText_s">
                        How fast will my money get to <span>Afghanistan</span>?
                    </h2>
                </div>
                <div class="moneyparagraph_s">
                    <p>Choose cash pickup and your money is typically available in minutes at convenient locations throughout Afghanistan.</p>
                </div>
            </div> 
            <img class="blocksImage_s" src="{{asset('assets/website-images/receiverDetaild1.svg')}}" alt="">
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row moneySection2_s">
            <img class="blocksImage_s" src="{{asset('assets/website-images/receiverDetaild4.svg')}}" alt="">
            <div class="col-5 offset-2">
                <div class="moneyTextSection_s">
                    <h2 class="moneyText_s">
                        Send money to almost anywhere in the world from <span>Afghanistan</span>
                    </h2>
                </div>
                <div class="moneyparagraph_s">
                    <p>Get the Amin Top-Up App for the fastest, easiest way to top-up any phone.</p>
                </div>
                <div class="appStoreBtns_s">
                    <a href="javascript:void(0)" class="mr-3">
                        <img src="{{asset('assets/website-images/appStoreBtn.svg')}}" alt="">
                    </a>
                    <a href="javascript:void(0)">
                        <img src="{{asset('assets/website-images/playStoreBtn.svg')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-5 px-0">
                <div class="moneyImageDiv_s">
                    <img class="moneyImage_s" src="{{asset('assets/website-images/receiverDetailMan.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{--@include('includes.website.footer-navbar') --}}
@endsection
@section('insertjavascript')
@endsection