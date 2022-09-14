@extends('layouts.admin-default')
<style>
     .user-modal-content textarea{
        resize: none;
     }
    .user-modal-content textarea:active, .user-modal-content textarea:focus{
        outline: none;
        box-shadow: none;
        border: 1px solid #F89822;
    }
</style>
@section('content')
@include('includes.admin-navbar')
<div class="right-sidebar">
    <div class="container-fluid">
        <div class="setting-heading pl-4">
            <h1>Support</h1>
           </div>
           <div class="row">
            <div class="col-4 col-xl-3 support-card-outer-main ">
                <div class="">
                    <div class="support-card-outer px-1 py-2" >
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                                <h1 class="pl-3 pt-2 name"> {{$post['user']['name']}}</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>Any Problem </h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                               
                                <h1 class="pl-3 pt-2">Muhammad Ali</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>Any Problem</h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                               
                                <h1 class="pl-3 pt-2">Muhammad Ali</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>Any Problem</h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                               
                                <h1 class="pl-3 pt-2">Muhammad Ali</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                            <h1>Any Problem</h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                               
                                <h1 class="pl-3 pt-2">Muhammad Ali</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>Any Problem</h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                               
                                <h1 class="pl-3 pt-2">Muhammad Ali</h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>Any Problem</h1>
                                <p>Category</p>
                                <h1>General</h1>
                                <p class="pb-1">Description</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
    
                        </div>
                    </div>
                </div>
            

            </div>
          
            <div class="col-8 col-xl-9 support-description-outer">
                <div class="support-description">
                    <div class="support-description-header py-3 px-4">
                        <h1>Description</h1>
                    </div>
                    <div class="support-description-cat py-3 px-4 d-flex align-items-center">
                        <p>Category:</p>
                        <div>
                            <p>General</p>
                        </div>
                    </div>
                    <div class="support-description-cat support-description-sub py-3 px-4 d-flex  align-items-center">
                        <p>Subject:</p>

                        <div>
                            <p>Any Problem</p>
                        </div>
                        
                    </div>
                    <div class="support-description-cat support-description-sub py-3 px-4 d-flex  align-items-center">
                        <p>User Name:</p>

                        <div>
                            <p id="name_id">Name</p>
                        </div>

                    <div class="support-description-section pt-5 px-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                      
                    </div>
            
                    <div class="support-description-button py-5 px-4 text-right">
                        <button data-toggle="modal" data-target="#basicsubsModal">Reply</button>
                        <form style="display: inline;" action="{{route('resolve_contact')}}" method="POST">
                            @csrf
                            <input id="contact_resolve_id" type="hidden" value="" name="id">

                            <button style="background-color: rgba(248, 152, 34, 1);" type="submit" name="submit">Resolved</button>
                        </form>
                    </div>

                </div>
               


            </div>
           </div>
    </div>
</div>
<div class="modal fade" id="basicsubsModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content user-modal">
        <div class="modal-body px-4">
            <div class="user-modal-header py-3">
                <h1>Reply</h1>
            </div>
            <div class="user-modal-content d-flex justify-content-start flex-wrap">
                <p class="pr-2">To:</p>
                <p>aliahmed666@gmail.com</p>
            </div>
            <div class="user-modal-content">
                <p>Message:</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                
            </div>
         
            
            <div class="user-modal-button d-flex justify-content-center">
                <button class="mr-1">Cancel</button>
                <button class="ml-1">Send</button>
            </div>
        </div>

    </div>
</div>
</div>

@endsection
@section('inserfooter') <script>
                            $('.sidebar-menu ul li:nth-of-type(5)').addClass('active');
                            </script>
                            <!-- show data click to card -->
                            <script>
                                $('.getuserdata').click(function() {
                                    var name = $(this).find('.name').text();
                                    var subject = $(this).find('.subject').text();
                                    var category = $(this).find('.category').text();
                                    var description = $(this).find('.description').text();
                                    var email = $(this).find('.email').text();
                                    var contact_id = $(this).find('.contacts').text();

                                    $("#name_id").html(name);
                                    $("#category_id").html(category);
                                    $("#subject_id").html(subject);
                                    $("#description_id").html(description);
                                    $("#email").val(email);
                                    $("#email_div").html(email);
                                    $("#contacts_id").val(contact_id);
                                    $("#contact_resolve_id").val(contact_id);



                                });
                            </script>
                            @endsection
