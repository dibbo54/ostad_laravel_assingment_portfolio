
@extends('Masterlayout')

@section('pageheader')
<header class="header" id="home">
    <div class="container">
        <div class="infos">
            <h6 class="subtitle">hello,I'm</h6>
            <h6 class="title">Dibbo Saha</h6>
            <p>UI/UX Designer</p>

            <div class="buttons pt-3">
                <button class="btn btn-primary rounded">HIRE ME</button>
                <button class="btn btn-dark rounded">DOWNLOAD CV</button>
            </div>      

            <div class="socials mt-4">
                <a class="social-item" href="https://www.facebook.com/profile.php?id=100070742011886&mibextid=ZbWKwL"><i class="ti-facebook"></i></a>
                <a class="social-item" href="javascript:void(0)"><i class="ti-google"></i></a>
                <a class="social-item" href="https://github.com/dibbo54"><i class="ti-github"></i></a>
                
            </div>
        </div>              
        <div class="img-holder">
            <img src= {{ asset('assets/imgs/man.svg') }}
             alt="">
        </div>      
    </div>  

    <!-- Header-widget -->
    <div class="widget">
        <div class="widget-item">
            <h2>124</h2>
            <p>Happy Clients</p>
        </div>
        <div class="widget-item">
            <h2>456</h2>
            <p>Project Completed</p>
        </div>
        <div class="widget-item">
            <h2>789</h2>
            <p>Awards Won</p>
        </div>
    </div>
    
</header> 
@include('layout.hireme')

@endsection