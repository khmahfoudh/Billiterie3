@extends('base')
@section('title','compotition')


@section('content')
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Events</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @php
                $events = [
                    ['title' => 'Champions League', 'image' => '/images/ch-leaugs.png'],
                    ['title' => 'UEFA Europa League', 'image' => '/images/europa.png'],
                    ['title' => 'UEFA Conference League', 'image' => '/images/conference.png'],
                    ['title' => 'LaLiga', 'image' => '/images/laliga.png'],
                    ['title' => 'Premier League', 'image' => '/images/premier.png'],
                    ['title' => 'Bundesliga', 'image' => '/images/bundesliga.jpg'],
                ];
            @endphp

            @foreach ($events as $event)
                <div class="relative rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <h2 class="text-white text-xl font-semibold">{{ $event['title'] }}</h2>
                    </div>
                    <button class="absolute bottom-4 right-4 bg-white text-black px-4 py-2 rounded-full shadow">
                        Visiter
                    </button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
