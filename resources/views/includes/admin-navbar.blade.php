<style>
  .pagination{
    cursor: pointer;
  }
  .notification-dropdown{
    left: -250px !important;
    top: 0px;
    border-radius: 10px;
    width: 400px;
    height: 320px;
    overflow-y: auto;
    box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5) !important;
    border: none !important
  }
  .notification-dropdown::-webkit-scrollbar{
    width: 0px;
  }
  @media screen and (max-width: 1199px) and (min-width:1110px) {
    .notification-dropdown{
    left: -305px !important;
    top: 0px;
    border-radius: 10px;
    width: 400px;
  }
  }
  @media screen and (max-width: 1109px) and (min-width:1029px) {
    .notification-dropdown{
    left: -266px !important;
    top: 0px;
    border-radius: 10px;
    width: 400px;
  }
  }
  @media screen and (max-width: 1028px) and (min-width:993px) {
    .notification-dropdown{
    left: -240px !important;
    top: 0px;
    border-radius: 10px;
    width: 400px;
  }
  }
  @media screen and (max-width: 1028px) and (min-width:768px) {
    .notification-dropdown{
      left:-246px !important;
      border-radius: 10px;
      width: 400px;
    }
  }
  @media screen and (max-width:767px){
    .notification-dropdown{
      left:-212px !important;
      border-radius: 10px;
      width: 400px;
    }
  }
  
  .error-notification p span{
    color: red;
    font-size: 16px;
    font-weight: bold;
    padding-right: 5px;
  }
  .error-notification{
    background: #F1F8FF;
    border-radius: 10px;
  }
  .notification-profile:hover{
    background: #001933!important;
    border-radius: 10px;
   
  }
  .notification-profile:hover p{
    color: white !important;
  }
 
  .success-notification p span{
    color: rgba(61, 171, 37, 1);
    font-size: 14px;
    font-weight: bold;
    padding-right: 5px;
  }
  .notification-profile p{
   color:  rgba(0, 0, 0, 1);
   margin-bottom: 0px;
   font-size: 14px;
  }
  .notification-profile p:hover{
    text-decoration: none !important;
    border-bottom: none !important;

  }
  .notification-area:hover{
    text-decoration: none !important;
    border-bottom: none !important;
   
  }

  .notification-profile{
    / border-bottom: 1px solid gainsboro !important; /
    padding-left: 20px;
  }
  .notification-area:last-of-type .notification-profile{
    border-bottom: none !important;
  }

  .dropdown-menu{
    left: -195px;
  }
  .icon-button {
    position: relative;
    cursor: pointer;
  }
  .icon-button__badge {
    position: absolute;
    top: 3px;
    right:2px;
    width: 8px;
    height: 8px;
    background:#00FFB8;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
  }
  .icon-button {
    padding-top: 15px !important;
  }
  .bell-icon .noti-dot{
    right: 0px !important;
  }
  .log-out{
    border: none;
    border-radius: 10px;
  }
  .log-out a{
    font-size: 12px;
    border-bottom: 1px solid rgba(134, 133, 133, 0.26);
  }

  .log-out a:last-of-type{
    border-bottom: none;
  }
  #appendNotification:nth-child(even) {background: #CCC}
  #appendNotification:nth-child(odd) {background: #FFF}
 
</style>
<div class="left-outer">
  <div class="sidebar-left">
    <div class="sidebar-inner">
      <div class="sidebar-logo">

        <a href="{{route('dashboard-details')}}">


          <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
        </a>
      </div>
      <div class="close">
        <span>x</span>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard-details')}}">
              <img class="active-icon" src="{{asset('assets/images/dots-icon.svg')}}" alt="dashboard-icon">
              <img class="normal-icon" src="{{asset('assets/images/dots-icon-gray.svg')}}" alt="dashboard-icon-gray">
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{route('user')}}">
              <img class="active-icon" src="{{asset('assets/images/user-icon-active.svg')}}" alt="user-icon">
              <img class="normal-icon" src="{{asset('assets/images/user-icon.svg')}}" alt="user-icon">
              User
            </a>
          </li>
          <li>
            <a href="{{route('transactionList')}}">
              <img class="active-icon" src="{{asset('assets/images/transection-icon-active.svg')}}" alt="transection-icon">
              <img class="normal-icon" src="{{asset('assets/images/transection-icon.svg')}}" alt="transection-icon">
              All Transaction
            </a>
          </li>
          <li>
            <a href="{{route('setting-details')}}">
              <img class="active-icon" src="{{asset('assets/images/setting-icon-active.svg')}}" alt="setting-icon">
              <img class="normal-icon" src="{{asset('assets/images/setting-icon.svg')}}" alt="setting-icon">
              Settings
            </a>
          </li>
          <li>
            <a href="{{route('support-page')}}">
              <img class="active-icon" src="{{asset('assets/images/support-icon -active.svg')}}" alt="support-icon">
              <img class="normal-icon" src="{{asset('assets/images/support-icon.svg')}}" alt="support-icon">
              Support
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-footer">
      <p>?? Amin Technologies Inc. All Right Reserved.</p>
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
        <!-- <div class="search-bar">
          <input type="text" placeholder="Search anything here ...">
        </div> -->
      </div>
    </div>
    <div class="col-xl-4 col-sm-5 col-6">
      <!-- Notification Area  -->
      <div class="bell-section-area">
        <div class="bell-icon">
          {{-- <img src="{{ asset('assets/images/bell-notify-icon.svg') }}" alt="bell-notify">
          <span class="noti-dot">3</span> --}}
          <div class="form-group has-search">

            <div class="dropdown" id="notificationIcon">
              <img src="{{ asset('assets/images/bell-notify-icon.svg') }}" class="dropdown-toggle icon-button" id="dropdownMenuButton" data-toggle="dropdown">
              <span class=""></span>
              <div class="dropdown-menu notification-dropdown px-2" id="appendNotification" aria-labelledby="dropdownMenuButton">
                
              </div>
            </div>
          </div>
        </div>
        <div class="admin-top-dropdown">
          <div class="dropdown">
            <button class="btn dropdown-toggle logout-button" type="button" data-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('assets/images/dropdown-user.svg') }}" alt="">
              <span>Amin Topup</span>
              <i class="fa-solid fa-angle-down"></i>
            </button>
            <div class="dropdown-menu log-out">
              <a class="dropdown-item" href="{{route('adminLogout')}}"> <img src="{{asset('assets/images/logout.svg')}}" alt=""> Logout</a>
              <a class="dropdown-item" href="{{route('changePasswordPage')}}"> <img src="{{asset('assets/images/padlock.png')}}" alt=""> Change Password</a>
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
  $(document).ready(function() {
    $(".menu-icon").click(function() {
      $('.left-outer').css({
        "left": "0"
      });
    });
    $(".close").click(function() {
      $('.left-outer').css({
        "left": "-250px"
      });
    });
  });
</script>

<!-- Backend Script  -->
<script>
    var LiveURL = '{{ env('BASE_URL_LIVE') }}';
  
  $(document).ready(function() {
    $("#notificationIcon").click(function() {
      $.ajax({
              url: LiveURL+'/api/admin_notifications',
              type: 'POST',
              dataType: 'json', // added data type
              headers: {
                  'Authorization': 'Bearer ' + token,
                  'Content-Type' : 'application/json'
              },
              success: function(response) {
                let notificationsArray = [];
                  response.data.forEach(notification => {
                      notificationsArray.push(notification);
                  });
                  $("#appendNotification").empty(); 
                  $(notificationsArray).each(function (i, e) {
                    if(i % 2 === 0) {
                      let div = `<a class="notification-area " href="#">
                      <div class="notification-profile error-notification d-flex py-3">
                        <p class="pl-3">${e.message}</p>
                      </div>
                    </a>`;
                    $("#appendNotification").append(div);
                    }else if(i % 2 != 0){
                      let div = `<a class="notification-area " href="#">
                        <div class="notification-profile success-notification d-flex py-3">
                          <p class="pl-3">${e.message}</p>
                        </div>
                      </a>`;
                      $("#appendNotification").append(div);
                    }
                  });
              },
              error: function (jqXHR, exception) {
                $("#appendNotification").empty(); 
                  let div = `<div class="pt-5">
                    <h3 class="text-center">No New Notifications</h3>
                  </div>`;
                  $("#appendNotification").append(div);
              },
          });
    });
  });
</script>
@endsection