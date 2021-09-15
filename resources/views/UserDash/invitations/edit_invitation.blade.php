@extends('Layout.app')

@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
        .mega-dropdown {
            position: static !important;
        }

        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        .mega-dropdown-menu>li>ul {
            padding: 0;
            margin: 0;
        }

        .mega-dropdown-menu>li>ul>li {
            list-style: none;
        }

        .mega-dropdown-menu>li>ul>li>a {
            display: block;
            color: #222;
            padding: 3px 5px;
        }

        .mega-dropdown-menu>li ul>li>a:hover,
        .mega-dropdown-menu>li ul>li>a:focus {
            text-decoration: none;
        }

        .mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }

        .carousel-control {
            width: 30px;
            height: 30px;
            top: -35px;

        }

        .left.carousel-control {
            right: 30px;
            left: inherit;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
            font-size: 12px;
            background-color: #fff;
            line-height: 30px;
            text-shadow: none;
            color: #333;
            border: 1px solid #ddd;
        }
    </style>

<style>
    
/**Wish Top */



.wish-top{
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;    
    background-repeat: no-repeat;
    background-position: center center;
    background-color:rgba(0,0,0,.5);
    
}
.wish-top .image{
  border: 5px solid #E97F81;
  width: 300px;
  height:300px;
  border-radius: 50%;  
  overflow:hidden;
}
.wish-top .image>img{
  width: 100%;
  height: 100%;
}


@font-face {
  font-family: neon;
  src: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/707108/neon.ttf);
}

.wish-top .text .heading{
    font-family: neon;
  color: #FB4264;
  font-size: 4vw;
  line-height: 9vw;
  font-weight:bolder;

}
.wish-top .text p{
    font-weight:700;
    font-size:20px;
    font-family: 'Allura', cursive;
    
}

/**Wish-quote */
.wish-quote{
    min-height:400px;
    background-repeat:no-repeat;
    background-size:contain;
    background-position:center;    
    background-repeat: no-repeat;
    background-position: right;
    
}
.wish-quote .card{
    border:0px;
    margin-top:10px;
    margin-bottom:10px;
}
.wish-quote blockquote {
    font-size: 1.1em;
    line-height: 1.6em;
    padding: 20px 20px 20px 40px;
    border-left: none;
    position: relative;
    text-indent: -19px
}

.wish-quote section#block_content{
    text-align: left
}

.wish-quote blockquote p {
    font-size: 1em
}

.wish-quote blockquote:before,
.wish-quote blockquote:after {
    font-family: Arial, serif;
    font-size: 2.5em;
    vertical-align: middle;
    line-height: 0
}

.wish-quote blockquote:before {
    content: open-quote;
    margin-right: 4px
}

.wish-quote blockquote:after {
    content: close-quote;
    margin-left: 3px
}

.wish-quote blockquote.blockstyle,
.wish-quote blockquote.style2 {
    background: #fff;
    font-style: italic
}

.wish-quote blockquote.blockstyle p,
.wish-quote blockquote.style2 p {
    display: inline
}

.wish-quote blockquote.blockstyle {
    border-left: 3px solid #f0715f;
    position: relative
}

.wish-quote blockquote.blockstyle>span.triangle:before {
    text-indent: 0;
    content: "\f0da";
    font-family: FontAwesome;
    color: #f0715f;
    position: absolute;
    left: -1px;
    top: 50%;
    margin-top: -11px;
    font-style: normal
}

.wish-quote blockquote.blockstyle:before,
.wish-quote blockquote.blockstyle:after {
    color: #f0715f
}

.wish-quote blockquote.blockstyle.border-color-blue {
    border-color: #01b7f2
}

.wish-quote blockquote.blockstyle.border-color-blue>span.triangle:before {
    color: #01b7f2
}

.wish-quote blockquote.blockstyle.border-color-yellow {
    border-color: #fdb714
}

.wish-quote blockquote.blockstyle.border-color-yellow>span.triangle:before {
    color: #fdb714
}


/**-------------------Bday-images-----------------------*/

.bday-images .heading::before {  
  transform: scaleX(0);
  transform-origin: bottom right;
}

.bday-images .heading:hover::before {
  transform: scaleX(1);
  transform-origin: bottom left;
}

.bday-images .heading::before {
  content: " ";
  display: block;
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  inset: 0 0 0 0;
  background: hsl(200 100% 80%);
  z-index: -1;
  transition: transform .3s ease;
}

.bday-images .heading{
  position: relative;
  font-weight: 700;
  font-size: 2rem;
}
/**Invitation Date */
.invi-date{
    min-height:150px;
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;    
    background-repeat: no-repeat;
    background-position: center center;
}
.invi-date .heading{
    font-size:60px;
    font-family: 'Pacifico', cursive;
    color:white;
}


        /**------------Bday-images------------- */
        .bday-memorry .img-card{
            height: 350px;
            overflow: hidden;
        }
        .bday-memorry .img-card>img{  
            height: 100%;
            width: 100%
        }

</style>
    
@endsection

@section('main')
<form action="{{route('my-invitations.update',$invite->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
    <!-----------Wish Top----------->
    <div class="container-flude wish-top"  style="background-image: url({{asset('Template/img/preview/6.jpg')}}" >
        <div class="p-3" style="">
            <div class="container">            
                <div class="row align-items-center">
                    <!------------Image------------>
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="image">
                            <img src="{{asset('Template/img/preview/527-5273264_free-happy-birthday-greeting-templets-happy-birthday-png.png')}}" class="" alt=""> 
                        </div>
                    </div>

                    <!------------text------------>
                    <div class="col-sm-6">
                        <div class="text">
                            <h4 class="heading">Happy Birthady</h4>
                            <textarea name="quote" id="" cols="15" rows="5" class="form-control mt-4">{{ucfirst($invite->quote)}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-----------Quote----------->
    <div class="container-flude">
        <div class="container wish-quote mt-5 d-flex align-items-center "  style="background-image: url({{asset('Template/img/preview/happy-birthday-balloon-background-flat-style_1017-22487.jpg')}}">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card ml-4">
                        <section id="block_content">
                            <div class="col-md-6 container">
                                <blockquote class="blockstyle"> <span class="triangle"></span>The Kadence Importer allows you to easily import all including images, from any of our Kadence themes demos. When you install a Kadence theme, the importer will automatically see what theme you are using and give you options to import anyone of those themes </blockquote>
                            </div>
                        </section>
                    </div>
                </div>
            </div>        
        </div>
    </div>
<!--
    <div class=" shadow container-flude border mt-3 mb-3 invi-date d-flex align-items-center" style="background-image: url({{asset('Template/img/preview/texture-glitter-elegant-christmas-sparkling-260nw-1674056632.jpg')}}">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 text-center align-items-center">
                    <h4 class="heading">10 Days left</h4>
                </div>
            </div>
        </div>
    </div>
-->
    <!-----------Birthady images----------->
    <div class="container images mt-5 bday-memorry">    
        <div class="row">
            <div class="col-sm-4">
                <div class="card border shadow mt-3 img-card">
                     @if(!empty($invite->img1))
                        <img class="brder img-thumbnail" src="{{@Storage::disk('local')->url($invite->img1)}}">
                    @else
                        <img class="brder img-thumbnail" src="{{asset('Template/img/none.png')}}" >
                    @endif    
                </div>
                <input type="file" name="image1" id="" class="mt-1">
            </div>

            <div class="col-sm-4">
                <div class="card border shadow mt-3 img-card">
                     @if(!empty($invite->img2))
                        <img class="brder img-thumbnail" src="{{@Storage::disk('local')->url($invite->img2)}}">
                    @else
                        <img class="brder img-thumbnail" src="{{asset('Template/img/none.png')}}" >
                    @endif    
                </div>
                <input type="file" name="image2" id="" class="mt-1">
            </div>

            <div class="col-sm-4">
                <div class="card border shadow mt-3 img-card">
                     @if(!empty($invite->img3))
                        <img class="brder img-thumbnail" src="{{@Storage::disk('local')->url($invite->img3)}}">
                    @else
                        <img class="brder img-thumbnail" src="{{asset('Template/img/none.png')}}" >
                    @endif    
                </div>
                <input type="file" name="image3" id="" class="mt-1">
            </div>            
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="create-button mt-5">
                    <button type="submit" class="btn bg-primary px-4 py-2">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
            );
        });

    </script>
@endsection
