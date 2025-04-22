@extends('base')
@section('title','game')



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>WYM SHOOT - Événements</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: #fff;
        }
        header {
            background: #f4f4f4;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            margin: 0 10px;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        .auth a {
            margin-left: 15px;
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            padding: 40px;
        }
        .title {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .title img {
            width: 30px;
            margin-right: 10px;
        }
        .event {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .event img {
            width: 50px;
            height: 40px;
        }
        .event .teams {
            display: flex;
            align-items: center;
            width: 300px;
            justify-content: space-between;
            margin-right: 40px;
        }
        .event .date {
            width: 100px;
            font-weight: bold;
        }
        .event .time {
            color: #888;
            margin-left: 10px;
        }
        .event .price {
            width: 100px;
            font-size: 24px;
            font-weight: bold;
        }
        .event button {
            background: #00B0FF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .right-image {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 500px;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="#">Home</a>
        <a href="index.blade.php">Events</a>
    </nav>
    <img src="/images/logo.png" alt="WYM SHOOT" height="60">
    <div class="auth">
        <a href="#">Sign in</a>
        <a href="#">Register</a>
    </div>
</header>

<div class="container">
    <div class="title">
        <img src="/images/uefa.png" alt="UEFA">
        Ligue des champions de l'UEFA
    </div>

    @php
        $matches = [
            ['home' => 'Barcelona', 'homeLogo' => 'data:image/png;base64,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', 'away' => 'Dortmund', 'awayLogo' => 'data:image/png;base64,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', 'date' => '09/04/2025'],
            ['home' => 'Arsenal', 'homeLogo' => '/images/arsenal.png', 'away' => 'Real Madrid', 'awayLogo' => '/images/realmadrid.png', 'date' => '08/04/2025'],
            ['home' => 'Bayern', 'homeLogo' => '/images/bayern.png', 'away' => 'Inter', 'awayLogo' => '/images/inter.png', 'date' => '08/04/2025'],
            ['home' => 'PSG', 'homeLogo' => '/images/psg.png', 'away' => 'Aston Villa', 'awayLogo' => '/images/astonvilla.png', 'date' => '09/04/2025'],
        ];
    @endphp

    @foreach ($matches as $match)
        <div class="event">
            <div class="teams">
                <div style="text-align: center;">
                    <img src="{{ $match['homeLogo'] }}" alt="{{ $match['home'] }}"><br>
                    {{ $match['home'] }}
                </div>
                <div style="text-align: center;">
                    <strong>{{ $match['date'] }}</strong><br>
                    <span class="time">20:00</span>
                </div>
                <div style="text-align: center;">
                    <img src="{{ $match['awayLogo'] }}" alt="{{ $match['away'] }}"><br>
                    {{ $match['away'] }}
                </div>
            </div>
            <div class="price">$50</div>
            <button>ACHETER</button>
        </div>
    @endforeach
</div>

<img src="/images/players.png" alt="players" class="right-image">
</body>
</html>
