@extends('layouts.landingApp') <!-- Menyertakan layout utama Anda -->


@section('content')
    <!-- Hero Section -->
    <section
        class="bg-cover bg-center h-[400px] flex items-center justify-center text-white bg-[url('https://via.placeholder.com/1500x400')]">
        <h2 class="text-4xl font-bold">Welcome to Our Website</h2>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-semibold mb-6">Our Services</h2>
            <p class="text-lg text-gray-600">We offer a variety of services to help you achieve your goals.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-screen-xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-semibold mb-6">Our Portfolio</h2>
            <p class="text-lg text-gray-600">Take a look at some of the projects we've worked on.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($portfolios as $portfolio)
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}"
                        class="w-full h-64 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">{{ $portfolio->title }}</h3>
                    <p>{{ $portfolio->description }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-semibold mb-6">Latest Blogs</h2>
            <p class="text-lg text-gray-600">Read our latest blog posts for insights and updates.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($blogs as $blog)
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">{{ $blog->title }}</h3>
                    <p>{{ Str::limit($blog->content, 150) }}</p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="text-clifford hover:text-clifford-600">Read
                        more</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
