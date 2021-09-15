@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<style>
.add-Tag{
    background-color: #000;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
.add-Tag .card-heading{
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    color: #fd4040
}
.add-Tag .card-text{
    text-align: center;
    font-size: 12px;
    font-weight: 400;
    color: #fff
}

.quick-card{
    background-color: #fff;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}



.quick-card .card-heading {
    font-size: 22px;
    color: #464e56;
    font-weight: 600;
    text-align: left
}

.card-text {
    font-size: 12px;
    font-weight: 500;
    color: #868e94;
    text-align: left
}
</style >

@endsection  
@section('main-content')
<div class="container dashboard">
    <div class="row">

        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Users</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-users')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$users->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Invitations</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-invitations')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$invitations->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Feedbacks</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-feedbacks')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$feedbacks->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external-js')
@show