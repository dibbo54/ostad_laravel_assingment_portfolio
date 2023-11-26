@extends('Masterlayout')

@section('aboutsection')

<section id="about" class="section mt-3">
    <div class="container mt-5">
        <div class="row text-center text-md-left">
            <div class="col-md-3">
                <img src= {{ asset('assets/imgs/avatar.jpg') }}
                 alt="" class="img-thumbnail mb-4">
            </div>
            <div class="pl-md-4 col-md-9">
                <h6 class="title">Dibbo Saha</h6>
                <p class="subtitle">UI/UX Designer</p>
                <p>
                    Creative and user-centric UI/UX Designer with 5+ years of experience in designing and developing user-friendly interfaces for web and mobile applications. Expertise in user research, wireframing, prototyping, and usability testing. Proven ability to create intuitive and engaging designs that meet both user needs and business objectives.
                </p>
                <button class="btn btn-primary rounded mt-3">DOWNLOAD CV</button>                   
            </div>
        </div>
    </div>
</section>
    
@endsection