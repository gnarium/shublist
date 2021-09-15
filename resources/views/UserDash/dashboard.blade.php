@extends('Layout.app')

@section('css')
<style>

.dashboard .address-content {
    font-size: 13px
}

.dashboard .card {
    height: 100%
}

.dashboard .content-aboutme span {
    font-size: 13px
}

.dashboard .portfolio-content p {
    font-size: 13px
}

.dashboard .badge {
    font-size: 11px;
    font-weight: 600
}

/**Profile */
.dashboard .profile figure{
  border: 1px solid;
  height: 200px;
  width: 200px;
  border-radius: 50%;
  overflow: hidden;
}
.dashboard .profile figure>img{  
  height: 100%;
  width: 100%;
}

/**My Invitation */
.dashboard .board .my-invitation figure{ 
  height: 250px;
  overflow: hidden;
}
.dashboard .board .my-invitation figure>img{
  height: 100%;
  width: 100%;
}
.my-invitation .name {
    font-size: 25px;
    font-weight: 650
}

.my-invitation .information {
    color: #9FA8DA;
    font-weight: 500;
    font-size: 16px
}

.my-invitation .list-icons {
    display: inline-flex;
    color: #C5CAE9
}



.my-invitation .facebook {
    background: #3b5998
}

.my-invitation .instagram {
    background: #3f729b
}

.my-invitation .youtube {
    background: #ff0000
}

.my-invitation .whatsapp {
    background: #4dc247
}

.my-invitation .pinterest {
    background: #cb2027
}

.my-invitation .card-footer{    
    border:0px;
    background:transparent;
    margin-top:-10px;
    padding-top:0px;
}

.my-invitation .card-footer .btn{    
    padding: 7px 10px;       
    color: #fff;
    font-size: 10px;    
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    font-weight:bolder;

}
.my-invitation .card-footer .Priview{
    width:60%;
    background: linear-gradient(to right, rgb(229 52 52) 0%,rgb(235 164 12) 100%);
}
.my-invitation .card-footer .Dell{
    width:28%;
    background: #ff4157;
    border-color: #ff4157;
}

        /**CATEGORY */
        

        .categories .title {
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px
}

.categories .content {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: auto;
    overflow: hidden;
    margin-top:20px;
}

.categories .content .content-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s
}

.categories .content:hover .content-overlay {
    opacity: 1
}

.categories .content-image {
    width: 100%
}

.categories img {
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px
}

.categories .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s
}

.categories .content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1
}

.categories .content-details h3 {
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase
}

.categories .content-details p {
    color: #fff;
    font-size: 0.8em
}

.categories .fadeIn-bottom {
    top: 80%
}

.categories .links-wrap a .go-create{
    font-family: 'Raleway';
    font-weight: 500;
    display: inline-block;
    margin-bottom: 0;
    background: linear-gradient(to right, rgb(229 52 52) 0%,rgb(235 164 12) 100%);
    color: #fff;
    border-radius: 0;
    line-height: 24px;
    padding: 8px 25px;
}
</style>
@endsection

@section('main')
<div class="container mt-5 mb-5 dashboard">
    <div class="card"> 
        <div class="row g-2">
            <div class="col-md-4">
                <div class="p-3 text-center border-end mt-4"> 
                    <figure>
                        
                        @if(!empty($user->profile->image))
                            <img class="rounded-circle" width="120" src="{{asset('Template/img/none.png')}}" />
                        @else
                            <img class="rounded-circle" width="120" src="{{asset('Template/img/none.png')}}" />
                        @endif
                        
                    </figure>                    
                    <h2 class="mt-2">{{ucfirst($user->name)}}</h2> 
                    <span class="address-content">{{$user->email}}</span>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm " data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-edit"></i>
                        </button>

                    <div class="content-aboutme mt-1 p-3">
                        <a class="btn btn-danger btn-sm w-100" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>                            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 board">
                    <div class="d-flex justify-content-between align-items-center"> 
                        <h4 class="font-weight-bolder text-success">My Invitation</h4>                         
                    </div>
                    <div class="row">
                        @if(isset($invitations) && $invitations->count() > 0)
                            @foreach($invitations as $invi)
                                <div class="col-sm-6 mb-4">
                                    <div class="card rounded my-invitation shadowss">
                                        <figure class="mb-0">
                                            <img class="card-img-top img-thumbnail" src="{{asset('Template/img/blog-01.jpg')}}">
                                        </figure>                                
                                        <div class="card-body d-block justify-content-center text-center mb-0 mt-0 pb-2 pt-3">
                                            <h5 class="">Happy Birthday</h5>                                    
                                        </div>
                                        <div class="card-footer mt-1">
                                            <a href="{{route('my-invitations.show',$invi->id)}}" class="btn  btn-sm Priview ">Preview</a>
                                            <a href="" class="btn btn-outline-primary btn-sm text-dark">wp</a>
                                            <a href="" class="btn btn-outline-info btn-sm text-dark"><i class="fa fa-share"></i></a>
                                            <a href="" class="btn btn-outline-success btn-sm text-dark"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    
                    <div class="portfolio-content mt-5">
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ------------- categories ------------- -->
    <div class="categories">
        <div class="container">

            <div class="row">
                <div class="all-title">
                    <h2> Create your own Invitations </h2>
                    <p>Choose an existing template and personalize it.</p>
                </div>
            </div>
            <div class="row product-online-desginer mt-0">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-1.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Pink</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-2.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Yellow A</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-3.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Chincoteague</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-5.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Romantic Card</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>



    
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update-user-profile')}}" method="post"  enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" placeholder="Phone Number" name="phone" value="{{$user->profile->phone}}">
            </div>
            <div class="form-group">
                <label for="Phone">Address</label>
                <textarea  class="form-control" placeholder="Address.." name="address" >{{$user->profile->address}}</textarea>
                
            </div>
            <div class="form-group">
                <label for="image">Profile</label>
                <br>
                <input type="file"  id="image" placeholder="Image" name="profile">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection