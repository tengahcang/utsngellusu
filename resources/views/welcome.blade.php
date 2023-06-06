<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}" alt="main logo">
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap mr-auto">
                    <li class="nav-item col-2 col-md-auto"><a href="{{route('home')}}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{route('product.index')}}" class="nav-link">My NFT</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                {{-- <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a> --}}
            </div>
        </div>
    </nav>


    <!-- About Me -->
    <div class="bg-light mt-5" id="main">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/saya.png') }}" alt="main logo">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-5">Hi !!<br> I'm Hafizh Muhammad Irfansyah</h1>
                    <p class="fs-5 mt-3">I am a young individual aged 21, originally from Surabaya, Indonesia.
                        From a very young age, I have developed a deep passion for the captivating world of comics.
                        The vibrant illustrations and compelling narratives found within the pages of these graphic stories
                         have always managed to inspire and entertain me in unique ways.<br><br>
                         If you would like to collaborate or have any inquiries, please reach out to me through the
                         "Contact" section. I will be delighted to respond promptly.</p>
                    <br>
                    <p class="fs-5">
                        <a href="#" class="text-decoration-none link-dark"><i class="bi bi-envelope-fill"></i>&nbsp;Email</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="text-decoration-none "><i class="bi bi-linkedin"></i>&nbsp;Linkedin</a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Bootstrap Icons -->
    <div id="bs-icons">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/kampus.png') }}" alt="Bootstrap Icons">
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2 class="display-6 mb-3">I am studying at the <br/>Institute of Technology Telkom Surabaya</h2>
                        <p class="fs-5">I am pursuing a Bachelor's degree in Information Systems at the Telkom Institute
                            of Technology in Surabaya. This program focuses on various aspects of information technology,
                            including software development, project management, data analysis, information security, and business
                            communication. Additionally, the program offers practical project opportunities and industry internships.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->

    <div class="bg-light py-5" id="footer">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="" class="logo text-decoration-none">
                        <div class="d-flex align-items-center">
                            <img src="{{ Vite::asset('resources/images/logoabu.png') }}" alt="" class="img-fluid" style="width: 46px;">
                            <div class="fs-5 ms-2 text-black">HMI Corp</div>
                        </div>
                    </a>
                    <div class="mt-4 text-muted">
                        <small>Designed by myself and myself.</small>
                    </div>
                    <div class="mt-4 text-muted">
                        <small>© 2023 HMI Corp. All rights reserved.</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
