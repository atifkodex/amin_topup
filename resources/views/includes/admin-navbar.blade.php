<div class="left-outer">
    <div class="sidebar-left">
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <a href="#">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="close">
                <span>x</span>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href="{{url('dashboard')}}">
                            <img class="active-icon" src="{{asset('assets/images/dots-icon.svg')}}" alt="dashboard-icon">
                            <img class="normal-icon" src="{{asset('assets/images/dots-icon-gray.svg')}}" alt="dashboard-icon-gray">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{url('user')}}">
                            <img class="active-icon" src="{{asset('assets/images/user-icon-active.svg')}}" alt="user-icon">
                            <img class="normal-icon" src="{{asset('assets/images/user-icon.svg')}}" alt="user-icon">
                            User
                        </a>
                    </li>
                    <li>
                        <a href="{{url('transaction')}}">
                            <img class="active-icon" src="{{asset('assets/images/transection-icon-active.svg')}}" alt="transection-icon">
                            <img class="normal-icon" src="{{asset('assets/images/transection-icon.svg')}}" alt="transection-icon">
                            All Transaction
                        </a>
                    </li>
                    <li>
                        <a href="{{url('setting')}}">
                           <img class="active-icon" src="{{asset('assets/images/setting-icon-active.svg')}}" alt="setting-icon">
                           <img class="normal-icon" src="{{asset('assets/images/setting-icon.svg')}}" alt="setting-icon">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="{{url('support')}}">
                            <img class="active-icon" src="{{asset('assets/images/support-icon -active.svg')}}" alt="support-icon">
                            <img class="normal-icon" src="{{asset('assets/images/support-icon.svg')}}" alt="support-icon">
                            Support
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
                <p>© Amin Technologies Inc. All Right Reserved.</p>
        </div>
    </div>
</div>
<!-- ===================== Navbar ===================== -->
<nav class="admin-navbar">
    <div class="row sidebar-top-area">
        <div class="col-xl-8 col-sm-7 col-6">
           <div class="top-sidebar">
             <!-- Menu Icon -->
             <div class="menu-icon">
                <i class="fa fa-bars"></i>
            </div>
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search anything here ...">
            </div>
           </div>
        </div>
        <div class="col-xl-4 col-sm-5 col-6">
            <!-- Notification Area  -->
            <div class="bell-section-area">
                <div class="bell-icon">
                    <img src="{{ asset('assets/images/bell-notify-icon.svg') }}" alt="bell-notify">
                    <span class="noti-dot">3</span>
                </div>
                <div class="admin-top-dropdown">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/dropdown-user.svg') }}" alt="">
                        <span>Amin Topup</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ============ JQuery Cdn ============ -->
@section('javascriptwork')
<script>     	
    $(document).ready(function(){
        $(".menu-icon").click(function(){
            $('.left-outer').css({"left": "0"});
        });
        $(".close").click(function(){
            $('.left-outer').css({"left": "-250px"});
        });
    });

</script>
@endsection
