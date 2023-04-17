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
        <div style=" position:absolute;top: 0;
        right: 0;margin:10px;">
        <x-app-layout>

        </x-app-layout>

    </div>

        @else


        @endauth

        @endif

</body>

</html>
