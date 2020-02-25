<header class="header text-center">
    <h1 class="blog-name pt-lg-4 mb-0"><a href="#">Anthony's Blog</a></h1>

    <nav class="navbar navbar-expand-lg navbar-dark" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column" >
            <div class="profile-section pt-3 pt-lg-0">
                <img class="profile-image mb-3 rounded-circle mx-auto" src="{{URL::to('/img/profile.png')}}" alt="image" >

                <div class="bio mb-3">Hello, my name is Michael Franklin. I am a web developer with a passion for Graphics Programming on the side.<br>
                </div><!--//bio-->
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/michaelpfranklin/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/Mfranklin19"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                </ul><!--//social-list-->
                <hr>
            </div><!--//profile-section-->
            <ul class="navbar-nav flex-column text-left">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('blog.index')}}">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('other.about')}}">About</a>
                </li>
            </ul>
            <div class="my-2 my-md-3">
                <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
            </div>
        </div>
    </nav>
</header>
