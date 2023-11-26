@extends('Masterlayout')

@section('skillssection')
<section class="section">
    <div class="container text-center">
        <h6 class="subtitle">Skills</h6>
        <h6 class="section-title mb-4">Why Choose me</h6>
        <p class="mb-5 pb-4">
            Proficient in Sketch, Figma, Adobe XD, and InVision.<br/>
Experience with HTML, CSS, and JavaScript.<br/>
Strong understanding of user-centered design principles.
        </p>

        <div class="row text-left">
            <div class="col-sm-6">
                <h6 class="mb-3">Photoshop</h6>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                </div>
            </div>
            <div class="col-sm-6">
                <h6 class="mb-3">Web Design</h6>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                </div>
            </div>
            <div class="col-sm-6">
                <h6 class="mb-3">App Design</h6>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                </div>
            </div>
            <div class="col-sm-6">
                <h6 class="mb-3">SEO</h6>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                </div>
            </div>
        </div>  
    </div>
</section>
@include('layout.hireme')

@endsection