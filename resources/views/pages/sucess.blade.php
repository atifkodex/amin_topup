@extends('layouts.admin-default')
<style>
    .success-header img{
        width: 100px;
        height: 100px;
    }
    .success-footer a{
        text-decoration: none
    }
    .success-body h1,  .success-body p{
        color:rgba(0, 25, 51, 1); 
    }
    .success-body p{
        margin-bottom: 0px
    }
    .success-footer a button{
        background:rgba(0, 25, 51, 1);
        color: white;
        width: 250px;
        height: 52px;
        border: none;
        border-radius: 30px; 
    }
</style>

@section('content')
<div class="container-fluid d-flex justify-content-center py-5 py-lg-2 py-xl-0">
    <div class="success-page-content d-flex align-items-center" style="height: 100vh">
        <div class="">
            <div class="success-header text-center pb-5">
                <img src="{{asset('assets/images/check.png')}}" alt="">
            </div>
            <div class="success-body text-center pb-5">
                <h1>Coming Soon</h1>
                <p class="py-3">Thank you for your Interest</p>
            </div>
            <!-- <div class="success-footer text-center">
                <a href="https://amintopup.com/admin">
                    <button>Click to Proceed</button>
                </a>
            </div> -->
        </div>
     
    </div>
</div>

@endsection