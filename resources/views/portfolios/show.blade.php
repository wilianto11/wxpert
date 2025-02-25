@extends('layouts.custom')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $portfolio->title }}</h1>

        @if ($portfolio->category && $portfolio->category->name)
            <h4 class="text-muted">Kategori: {{ $portfolio->category->name }}</h4>
        @else
            <h4 class="text-muted">Kategori tidak tersedia</h4>
        @endif

        <div class="mb-3">
            <p>{{ $portfolio->description }}</p>
        </div>

        @if ($portfolio->image)
            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid">
        @endif

        <div class="mt-3">
            <a href="{{ $portfolio->link }}" target="_blank" class="btn btn-primary">Lihat Portfolio</a>
        </div>
    </div>
@endsection
