
     <!-- Page navigation -->
     <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src= {{ asset('assets/imgs/logo.svg') }}
             alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/AboutSection') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Service') }}">Service</a>
                    </li>    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Skills') }}">Skills</a>
                    </li>  
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Testimonial') }}">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="">Copmonents</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
