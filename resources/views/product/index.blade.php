<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pagetitle }}</title>
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
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{route('product.index')}}" class="nav-link active">My NFT</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                {{-- <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a> --}}
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3">{{ $pagetitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add NFT</a>
                    </div>
                </div>
        </div>
        <br>

        <hr>
        <div class="container">
            <div class="row mt-3">
                @foreach ($datas as $product)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card" style="max-width: 100%; width: 100%;">
                            <img src="{{ Vite::asset('resources/images/nft/'.$product->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title font-weight-bold">{{ $product->name }}</h5>
                                    <h5 class="card-title font-weight-bold">2D</h5>
                                </div>

                                <label class="card-text"><i class="bi bi-coin"></i>&nbsp;{{ $product->price }}</label><br><br>
                                <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger btn-sm"
                                    onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus produk ini?')) { document.getElementById('delete-form-{{ $product->id }}').submit(); }">
                                     <i class="bi bi-trash3-fill"></i>
                                </a>
                                 <form id="delete-form-{{ $product->id }}" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: none;">
                                     @csrf
                                     @method('delete')
                                 </form>
                            </div>
                        </div>
                    </div>
                @endforeach
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
