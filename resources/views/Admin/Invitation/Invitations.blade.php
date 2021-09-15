@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<style>

.invitations .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }


 .invitations .padding {
     padding: 1rem
 }

 .invitations .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .invitations .pl-3,
 .invitations .px-3 {
     padding-left: 1rem !important
 }

 .invitations .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .invitations .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .invitations .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .invitations p {
     font-size: 0.875rem;
     margin-bottom: .5rem;
     line-height: 1.5rem
 }

 .invitations .table-responsive {
     display: block;
     width: 100%;
     overflow-x: auto;
     -webkit-overflow-scrolling: touch;
     -ms-overflow-style: -ms-autohiding-scrollbar
 }

 .invitations .table,
 .jsgrid .jsgrid-table {
     width: 100%;
     max-width: 100%;
     margin-bottom: 1rem;
     background-color: transparent
 }

 .invitations .table thead th,
 .invitations .jsgrid .jsgrid-table thead th {
     border-top: 0;
     border-bottom-width: 1px;
     font-weight: 500;
     font-size: .875rem;
     text-transform: uppercase
 }

 .invitations .table td,
 .invitations .jsgrid .jsgrid-table td {
     font-size: 0.875rem;
     padding: .875rem 0.9375rem
 }

 .invitations .badge {
     border-radius: 0;
     font-size: 12px;
     line-height: 1;
     padding: .375rem .5625rem;
     font-weight: normal
 }
</style >

@endsection  
@section('main-content')
<div class="page-content page-container invitations" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="font-weight-bolder">Invitations</h2>                        
                        @if(isset($invitations) && $invitations->count() >0)
                            @foreach($invitations as $invi)
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Invitations</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="" class="btn btn-link text-dark">Birthday</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin-users-details',$invi->user->id)}}" class="btn btn-link">
                                                        {{ucfirst($invi->user->name)}}
                                                    </a>
                                                </td>
                                                <td > 
                                                    <span class="btn">
                                                        {{$invi->created_at->diffForHumans()}}
                                                    </span>                                            
                                                </td>
                                                <td>
                                                    <a href="{{route('invite',$invi->slug)}}" class="btn btn-success px-3 btn-sm">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach

                            <div class="lilnks">
                                {{$invitations->links()}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external-js')
@show