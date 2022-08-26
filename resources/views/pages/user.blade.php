@extends('layouts.admin-default')

@section('content')
    @include('includes.admin-navbar')
    <div class="right-sidebar">
        <div class="container-fluid">
            <div class="setting-heading pl-4">
                <h1>User</h1>
            </div>
            <div class="row">
                <div class="col-xl-9"></div>
                <div class="col-xl-3 pb-5">
                    <div class="user-filter px-3 py-2">
                        <div class="user-filter-header py-3">
                            <h1>Filter</h1>
                        </div>
                        <div class="user-filter-form">
                            <form>
                                <div class="form-group">
                                  <label for="username">User Name</label>
                                  <input type="text" class="form-control" id="username"  placeholder="Type Here..">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  placeholder="Type Here..">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Type Here..">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="userphonenumber">User Phone Number</label>
                                    <input type="text" class="form-control" id="userphonenumber"  placeholder="Type Here..">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" id="date"  placeholder="Type Here..">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" class="form-control" id="time"  placeholder="Type Here..">
                                    
                                  </div>
                                  <div class="text-center py-3">
                                    <button>Search</button>
                                  </div>
                              
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
       @section('inserfooter')
            <script>
                $('.sidebar-menu ul li:nth-of-type(2)').addClass('active');
            </script>
        @endsection
