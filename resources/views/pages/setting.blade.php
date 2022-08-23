@extends('layouts.admin-default')

@section('content')
<div class="container-fluid page-bg">
   <div class="setting-heading">
    <h1>Settings</h1>
   </div>
   <div class="setting-section p-4">
    <div class="setting-section-heading">
        <h1>Operator Network</h1>
    </div>
    <div class="setting-dropdown py-2">
        <div class="dropdown">
            <button class="setting-dropdown-btn d-flex justify-content-between align-items-center text-left btn  dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Roshan
              <img src="{{asset('assets/images/right-angle.svg')}}" alt="">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
    </div>
    <div class="setting-dropdown py-2">
        <div class="dropdown">
            <button class="setting-dropdown-btn d-flex justify-content-between align-items-center text-left btn  dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Roshan
              <img src="{{asset('assets/images/right-angle.svg')}}" alt="">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
    </div>

   </div>
</div>
@endsection
@section('javascriptwork')

@endsection