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
            <a href="#" class="hover:text-pink-400">Hi Babe!!</a>
        </div>
    </div>
    
    {{-- Hero --}}
    <div class="justify-between px-10 py-20 text-pink-600 bg-red-200 md:flex">
        <div class="mb-10 md:w-1/2 md:mb-0 ">
            <h2 class="mb-6 text-2xl text-red-400 md:text-4xl lg:text-6xl">Happy Anniversary</h2>
            <p class="mb-6">There is never a boring day with you!</p>

            <a href="#" class="inline-block px-6 py-3 text-lg text-red-200 bg-red-400 rounded-xl hover:bg-red-300">Pics of us</a>
            <a href="#" class="inline-block px-6 py-3 text-lg text-red-200 bg-pink-400 rounded-xl hover:bg-pink-500">Special notes with you</a>
        </div>

        <div class="md:w-1/3">
            <img src="{{ URL::asset('Kaye Pics/206992996_977929022801621_3020918403938549738_n.jpg') }}" alt="Love this pic of us" class="w-screen rounded-lg shadow-2xl">
        </div>
    </div>

    {{-- Feats --}}
    <div class="px-10 py-16 text-center bg-pink-400 md:flex">
        <div class="mr-2 text-center">
            <img src="{{ URL::asset('Kaye Pics/223026944_827833297919776_1463970522453527697_n.jpg') }}" alt="" class="w-full mb-4 border-2 border-pink-200 border-solid rounded">
            <p>You are</p>
        </div>
        <div class="mt-8 mr-2 text-center">
            <img src="{{ URL::asset('Kaye Pics/223698835_224601419554641_574669867262057220_n.jpg') }}" alt="" class="w-full mb-4 border-2 border-pink-200 border-solid rounded">
            <p>the sweetest</p>
        </div>
        <div class="mr-2 text-center">
            <img src="{{ URL::asset('Kaye Pics/218863736_522913108796942_3289076677364599052_n.jpg') }}" alt="" class="w-full mb-4 border-2 border-pink-200 border-solid rounded">
            <p>Gift I</p>
        </div>
        <div class="mt-8 mr-2 text-center">
            <img src="{{ URL::asset('Kaye Pics/218315853_188799569939328_8365944148267828658_n.jpg') }}" alt="" class="w-full mb-4 border-2 border-pink-200 border-solid rounded">
            <p>could ever ask for</p>
        </div>
    </div>

    {{-- footer --}}
    <div class="flex-row text-center bg-pink-600">
        <div class="p-3">
            <H1 class="">Wishing you enjoyed this website I made you</H1>
        </div>
        <div></div>
    </div>

</body>
</html>