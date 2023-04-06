<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
        }

        li {
            float: right;
            border-right: 1px solid #bbb;
        }

        li a {
            display: block;
            color: rgb(0, 153, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif
        }

        li a:hover:not(.active) {
            background-color: #5B06E5;
            color: white
        }
    </style>
    <title>Home</title>
</head>

<body>


        @if (Route::has('login'))

        @auth
        <x-app-layout>
             
        </x-app-layout>
  <ul>
        @else
<ul>
        <li><a href="{{ route('login') }}">sign in</a></li>
        <li><a href="{{ route('register') }}">sign up</a></li>

        @endauth

        @endif
</ul>
    <h1>Groupe frontend code</h1>
</body>

</html>
