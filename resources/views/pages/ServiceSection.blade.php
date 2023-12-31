@extends('Masterlayout')

@section('servicesection')
<section id="service" class="section">
    <div class="container text-center">
        <h6 class="subtitle">Service</h6>
        <h6 class="section-title mb-4">What I Do</h6>
        <p class="mb-5 pb-4">Designed and developed user interfaces for a variety of web and mobile applications
            <br> Created wireframes and prototypes to test and iterate on designs</p>

        <div class="row">
            <div class="col-sm-6 col-md-3 mb-4">
                <div class="custom-card card border">
                    <div class="card-body">
                        <i class="icon ti-crown"></i>
                        <h5>UI/UX Design</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <div class="custom-card card border">
                    <div class="card-body">
                        <i class="icon ti-desktop"></i>
                        <h5>Web Design</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <div class="custom-card card border">
                    <div class="card-body">
                        <i class="icon ti-mobile"></i>
                        <h5>App Design</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <div class="custom-card card border">
                    <div class="card-body">
                        <i class="icon ti-bar-chart"></i>
                        <h5>SEO</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection