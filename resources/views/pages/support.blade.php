@extends('layouts.admin-default')

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
                    <div class="support-card-outer px-1 py-2">
                        @foreach($data as $post)

                        <div class="support-card pl-3 py-3 my-3">
                            <div class="support-card-header d-flex align-items-center">
                                <div class="image-outer">
                                    <img src="{{asset('assets/images/profile-image.jpg')}}" alt="image">
                                </div>
                                <h1 class="pl-3 pt-2"> {{$post['user']->name}} </h1>
                            </div>
                            <div class="support-card-body pt-2">
                                <p>Subject</p>
                                <h1>{{$post->subject}}</h1>
                                <p>Category</p>
                                <h1>{{$post->category}}</h1>
                                <p class="pb-1">Description</p>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                        @endforeach
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
                        <p>Description:</p>
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
                    <div class="support-description-section pt-5 px-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorem dolor autem optio hic, eaque magni libero aspernatur porro natus deserunt! Adipisci incidunt aperiam voluptate temporibus necessitatibus explicabo assumenda aliquid?
                    </div>

                    <div class="support-description-button py-5 px-4 text-right">
                        <button>Resolved</button>
                        <button>Archived</button>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>

@endsection
@section('inserfooter')
<script>
    $('.sidebar-menu ul li:nth-of-type(5)').addClass('active');
</script>
@endsection