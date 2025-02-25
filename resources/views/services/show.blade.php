@extends('layouts.custom')

@section('content')
    <div class="max-w-4xl px-6 py-12 mx-auto">
        <div class="mb-6">
            <a href="{{ route('services.index') }}" class="text-blue-500 hover:underline">← Back to Services</a>
        </div>

        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-gray-900">{{ $service->title }}</h1>
            <p class="mt-2 text-gray-600">{{ $service->description }}</p>

            <div class="flex items-center mt-4">
                <span class="text-lg font-semibold text-gray-800">Price:</span>
                <span class="ml-2 text-xl font-bold text-green-600">${{ number_format($service->price, 2) }}</span>
            </div>

            <!-- Tombol Beli Sekarang -->
            <div class="mt-6">
                @if (Auth::check())
                    <a href="{{ route('checkout', ['service_id' => $service->id]) }}"
                        class="px-6 py-3 text-lg font-semibold text-white bg-green-600 rounded-lg hover:bg-green-700">
                        Beli Sekarang
                    </a>
                @else
                    <p class="text-sm text-red-500 mt-4">You must be <a href="{{ route('login') }}"
                            class="text-blue-500 hover:underline">logged in</a> to purchase this service.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
