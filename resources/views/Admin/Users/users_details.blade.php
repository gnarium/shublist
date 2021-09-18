@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<style>

</style>
@endsection  
@section('main-content')
<div class="container mt-5 mb-5 dashboard">
    <div class="card p-2">
        <div class="row align-items-center" >
            <div class="col-sm-4 d-flex justify-content-center ">
                <div class="image">
                    <img class="rounded-circle" width="120" src="{{asset('Template/img/none.png')}}" />
                </div>
            </div>
            <div class="col-sm-8">
                <h2 class="mt-2">{{ucfirst($user->name)}}</h2> 
                <span class="address-content"> <i class="fa fa-"></i> <strong>Email - </strong> {{$user->email}}</span>
                <p><span class="address-content"> <i class="fa fa-"></i> <strong>Password - </strong> {{$user->password}}</span></p>
                <p><span class="address-content"> <i class="fa fa-"></i> <strong>Numabe - </strong> {{@$user->phone}}</span></p>
                <p><span class="address-content"> <i class="fa fa-"></i> <strong>Address - </strong> {{@$user->address}}</span></p>
                
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <h3 class="font-weight-bolder">Invitations</h3>
        </div>        
    </div>

    <div class="row mt-2">
        @if(isset($invitations) && $invitations->count() > 0)
            @foreach($invitations as $invi)
                <div class="col-sm-3 d-flex">
                    <div class="card rounded my-invitation shadowss mb-0">
                        <figure class="mb-0">
                            <img class="card-img-top img-thumbnail" src="{{asset('Template/img/blog-01.jpg')}}">
                        </figure>                                
                        <div class="card-body d-block justify-content-center text-center mb-0 mt-0 pb-2 pt-3">
                            <h5 class="">Happy Birthday</h5>                                    
                        </div>
                        <div class="card-footer mt-0 border-0 bg-white">
                            <a href="{{route('invite',$invi->slug)}}" class="btn btn-primary btn-sm Priview w-100">Preview</a>                                            
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-6 mx-auto ">
                <div class="card p-4">
                    <h1 class="font-weight-bolder">No Data Fount!!!!</h1>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('external-js')
@show