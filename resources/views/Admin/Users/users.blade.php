@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<style>

.users .h2 {
    color: #444;
    font-family: 'PT Sans', sans-serif
}

.users thead {
    font-family: 'Poppins', sans-serif;
    font-weight: bolder;
    font-size: 20px;
    color: #666
}

.users img {
    width: 40px;
    height: 40px
}

.users .name {
    display: inline-block
}

.users .bg-blue {
    background-color: #EBF5FB;
    border-radius: 8px
}

.users .fa-check,
.users .fa-minus {
    color: blue
}

.users .bg-blue:hover {
    background-color: #3e64ff;
    color: #eee;
    cursor: pointer
}

.users .bg-blue:hover .fa-check,
.users .bg-blue:hover .fa-minus {
    background-color: #3e64ff;
    color: #eee
}

.users .table thead th,
.users .table td {
    border: none
}

.users .table tbody td:first-child {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
}

.users .table tbody td:last-child {
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px
}

.users #spacing-row {
    height: 10px
}

@media(max-width:575px) {
    .users {
        width: 125%;
        padding: 20px 10px
    }
}
</style >

@endsection  
@section('main-content')
<div class="container rounded mt-5 bg-white p-md-5 users">
    <div class="row border-bottom">
        <div class="col-sm-4">
            <h2 class="font-weight-bolder">
                <i class="fa fa-user-circle mb-2"></i>&nbsp;Users
            </h2>
        </div>
        <div class="col-sm-8">
            <form action="{{route('admin-users-search')}}" method="post">                
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Email" aria-describedby="search" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-success" id="search">Search</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>    
    @if(isset($users) && $users->count() > 0)
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Invitations</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="bg-blue">
                            <td class="pt-2"> 
                                <div class="pl-lg-2 pl-md-2 pl-1 name">
                                    <h6>{{ucfirst($user->name)}}</h6>
                                </div>
                            </td>
                            <td class="pt-3 mt-1">{{$user->created_at->diffForHumans()}}</td>
                            <td class="pt-3">{{$user->invitation->count()}}</td>
                            <td class="pt-3"><a href="{{route('admin-users-details',$user->id)}}" class="btn btn-success btn-sm px-4">View</a></td>
                            
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$users->links()}}
    @else
    <div class="no-data">
        <p class="alert">No Data Found</p>
    </div>    
    @endif
</div>
@endsection

@section('external-js')
@show