@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<style>
 

.feedbacks {        
    border-radius: 15px;
    min-height: 200px;
    margin-top: 50px;
    margin-bottom: 50px;
    overflow: hidden;
    padding: 0;
    
}


.feedbacks .content {    
    min-height: 625px;
    padding-left:50px;
    padding-right:50px;

}

.feedbacks .content .list {    
    border-radius: 8px;
    width:100%;
}

.feedbacks .content .list .lamp #lamp {
    width: 40px;
    height: 40px
}

.feedbacks .content .list .progress,
.feedbacks .content #analyse-section .level-box .progress {
    background-color: #e6e6e6;
    border-radius: 15px;
    height: 0.8rem
}

.feedbacks .content .list .progress-bar,
.feedbacks .content #analyse-section .level-box .progress-bar {
    background: linear-gradient(135deg, #b500ec, #db76fa);
    border-radius: 15px;
    animation: fill-progress 0.4s forwards
}

@keyframes fill-progress {
    0% {
        width: 0%
    }

    25% {
        width: 25%
    }

    50% {
        width: 45%
    }

    75% {
        width: 65%
    }

    100% {
        width: 75%
    }
}

.feedbacks .content .title {
    color: #555
}

.feedbacks .content .pink-label {
    color: #d765fa;
    font-weight: 500;
    font-size: 0.9rem
}

.feedbacks .content .list .table tr .blue-label {
    color: #0e5c9c;
    font-size: 1.1rem;
    font-weight: 600
}

.feedbacks .content .list .table {
    position: relative;
    border: none
}

.feedbacks .content .list .table tr {
    position: relative;
    transition: all 0.3s ease;
    height: 100px;
    border: none
}

.feedbacks .content .list .table tr:hover,
.feedbacks .content .list .table tr.active {
    background: linear-gradient(135deg, #0f2f58, #4f16d4);
    transform: scale(1.03);
    box-shadow: 0 5px 15px #340e8b91;
    border: none
}

.feedbacks .content .list .table tr:hover .fs-08,
.feedbacks .content .list .table tr.active .fs-08,
.feedbacks .content .list .table tr.active th,
.feedbacks .content .list .table tr.active td,
.feedbacks .content .list .table tr.active .blue-label,
.feedbacks .content .list .table tr:hover th,
.feedbacks .content .list .table tr:hover td,
.feedbacks .content .list .table tr:hover .blue-label {
    color: #fff
}

.feedbacks .content .list .table tr .fs-08 {
    font-size: 0.8rem;
    color: #0e5c9c
}

.feedbacks .content .list .table tr th {
    color: #0e5c9c;
    border: none;
    vertical-align: middle;
    text-align: center;
    border-bottom: 1px solid transparent
}

.feedbacks .content .list .table tr td {
    text-align: center;
    vertical-align: middle;
    border: none;
    border-bottom: 1px solid #ddd
}

.feedbacks .content .list .table tr td:nth-of-type(1) {
    text-align: left
}

.feedbacks .content .list .table tr:last-of-type td {
    border: none
}

.feedbacks .content .list .table tr.disable,
.feedbacks .content .list .table tr.disable .blue-label,
.feedbacks .content .list .table tr.disable .fs-08,
.feedbacks .content .list .table tr.disable th {
    color: #777;
    pointer-events: none;
    cursor: none
}

.fw-5 {
    font-weight: 600
}

.feedbacks .btn.btn-default {
    border-radius: 50%;
    padding: 1px 4px;
    background-color: #aaa;
    font-size: 0.9rem
}


@media(max-width: 1400px) {
    #analyse-section.ms-auto {
        margin: 20px 0px !important
    }
}

@media(max-width: 490px) {
    .feedbacks .content {
        padding: 0 15px
    }

    .feedbacks .content .list .table tr {
        border-bottom: 1px solid #ddd
    }

    .feedbacks .content .list .table tr td {
        display: block;
        text-align: left;
        border: none
    }

    .feedbacks .content .list .table tr th {
        vertical-align: top
    }

    .text-center {
        text-align: left !important
    }

    .fb-view{
        background: linear-gradient(135deg, #0f2f58, #4f16d4);
        box-shadow: 0 5px 15px #340e8b91;
        border: none
    }
}
</style >

@endsection  
@section('main-content')
<div class="container feedbacks">    
    <div class="content d-flex align-items-start flex-wrap">
        <div class="list bg-white py-3 border">
            <div class="row m-0 px-2 pb-1 border-bottom">
                <div class="col-lg-6 d-flex align-items-center flex-wrap">
                    <div class="lamp"> <img src="https://www.freepnglogos.com/uploads/lamp/lamp-logo-mpada-luz-brilho-imagens-tis-pixabay-0.png" alt="" id="lamp"> </div>
                    <div class="title mx-lg-2 mx-1">Feedbacks</div>
                    <div class="pink-label mx-1">{{$feedbacks->count()}} E-Mails</div>
                </div>                
            </div>
            @if(isset($feedbacks) && $feedbacks->count() > 0)                            
                <div class="table-responsive-lg mt-4 w-100">
                    <table class="table">
                        <tbody>
                            @foreach($feedbacks as $feed)
                                <tr>
                                    
                                    <td>
                                        <div class="d-flex flex-column">
                                            <div class="blue-label">{{$feed->name}}</div>
                                            <div class="fs-08"> <span class="small"> <i class="fa fa-envelope" aria-hidden="true"></i> {{$feed->email}}</span></div>
                                            <div class="fs-08"> <span class="small"><i class="fa fa-phone"></i> {{$feed->number}}</span></div>
                                            <div class="fs-08"> {{$feed->msg}}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column text-center">
                                            <div class="blue-label">
                                                <a href="" class="fb-view px-5 py-2">Reply</a>
                                            </div>
                                            <div class="fs-08">{{$feed->created_at->diffForHumans()}}</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="links mt-4 text-center">
                    {{$feedbacks->links()}}
                </div>
             @endif
        </div>
        
    </div>
</div>
@endsection

@section('external-js')
@show