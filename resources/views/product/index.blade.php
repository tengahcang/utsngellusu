@extends('layout.app')
@section('halaman')
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
                                <h5 class="card-title font-weight-bold">{{ $product->type->kode_tipe }}</h5>
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
</div>
@include('layout.footer')
@endsection