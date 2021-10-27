<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>For mi Amore</title>
</head>
<body class="bg-white">
    {{-- header --}}
    <div class="flex items-center justify-between p-4 text-xl bg-pink-300 ">
        <div>
            <a href="#" class="mr-2">💖</a>
            <a href="" class="inline-block p-2 text-pink-600 hover:text-pink-400">Home</a>
            <a href="#" class="inline-block p-2 text-pink-600 hover:text-pink-400">About us</a>
        </div>

        <div class="">
            <a href="#" class="hover:text-white">Hi Babe!!</a>
        </div>
    </div>

    <div class="justify-between px-10 py-20 text-pink-600 bg-red-200 md:flex">
        <div class="mb-10 md:w-1/2 md:mb-0 ">
            <h2 class="mb-6 text-2xl text-red-400 md:text-4xl lg:text-6xl">Happy Anniversary</h2>
            <p>There is never a boring day with you!</p>

            <a href="#" class="inline-block px-6 py-3 text-lg text-red-200 bg-red-400 rounded-xl">Pics of us</a>
            <a href="#" class="inline-block px-6 py-3 text-lg text-red-200 bg-pink-400 rounded-xl">Special notes with you</a>
        </div>

        <div class="md:w-1/3">
            <img src="{{ URL::asset('Kaye Pics/217394586_563290608018597_42811394312429586_n.jpg') }}" alt="Love this pic of us" class="w-screen rounded-lg shadow-2xl">
        </div>
    </div>

</body>
</html>