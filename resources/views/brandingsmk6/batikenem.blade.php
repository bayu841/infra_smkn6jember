@extends('layouts.app')
@section('title', 'Batik Enem')

@section('content')
    <div class="container">
        <h1>Batik Enem</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ Storage::url('products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="{{ route('product.show', $product) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="/branding" class="btn btn-secondary mt-3">Lihat Semua</a>
    </div>
@endsection
