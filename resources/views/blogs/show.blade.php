@extends('layouts.landingApp')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Blog Detail -->
                <div class="card shadow-sm mb-4">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                    @else
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="No Image">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <p class="card-text"><small class="text-muted">Kategori: {{ $blog->category->name }} | Ditulis oleh
                                {{ $blog->author->name }} | {{ $blog->created_at->format('d M Y') }}</small></p>
                        <div class="card-text">
                            {!! nl2br(e($blog->content)) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Sidebar untuk kategori dan blog lainnya -->
                <div class="list-group">
                    <h5>Kategori</h5>
                    @foreach ($categories as $category)
                        <a href="{{ route('blogs.index') }}?category={{ $category->slug }}"
                            class="list-group-item list-group-item-action">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
