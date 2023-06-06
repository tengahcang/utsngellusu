@extends('layout.app')
@section('halaman')
<div class="container-sm mt-5">
    <form action="{{ route('product.update',['product' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-image-fill fs-1"></i>
                    <h4>Edit NFT</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name',$data->name) }}" placeholder="Enter Name NFT">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price',$data->price) }}" placeholder="Enter Price">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image NFT</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ old('image',$data->image) }}">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('type');
                            else
                                $selected = $data->type_id;
                        @endphp
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $selected == $type->id ? 'selected' : '' }}>{{ $type->kode_tipe.' - '.$type->nama_tipe }}</option>
                        @endforeach
                        </select>
                        @error('unit')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ Vite::asset('resources/images/nft/'.$data->image) }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('product.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection