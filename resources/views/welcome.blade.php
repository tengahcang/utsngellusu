@extends('layout.app')
@section('halaman')
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
@include('layout.footer')
@endsection