<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <nav class="bg-blue-400">
            <div class="flex justify-between items-center p-6 px-6 lg:px-0 container mx-auto">
                <!-- logo-->
                <div class="text-lg font-bold uppercase">watatii</div>

                <!-- hamburger -->
                <input type="checkbox" class="peer hidden" name="hamburger" id="hamburger">
                <label for="hamburger" class="peer-checked:hamburger block relative cursor-pointer lg:hidden border-2 border-gray-300 peer-checked:border-2 peer-checked:border-white p-3 rounded-md transition-all" for="hamburger">
                    <div class="m-auto w-6 h-0.5 rounded bg-gray-300 transition-all duration-300"></div>
                    <div class="m-auto mt-2 w-6 h-0.5 rounded bg-gray-300 transition-all duration-300"></div>
                </label>

                <!-- menu navbar -->
                <div class="flex translate-y-full peer-checked:translate-y-0 lg:translate-y-0 inset-0 fixed lg:static pt-20 lg:pt-0 bg-white lg:bg-transparent -z-10 lg:z-10 lg:h-auto lg:w-auto transition-all duration-300 ease-in-out">
                    <div class="bg-white shadow-md lg:bg-transparent lg:shadow-none py-10 lg:py-0 flex flex-col lg:items-center lg:flex-row px-6 space-y-4 lg:space-y-0 lg:space-x-12">
                        <a class="text-black lg:text-white hover:text-gray-300 transition-all" href="">Home</a>
                        <a class="text-black lg:text-white hover:text-gray-300 transition-all" href="">About</a>
                        <a class="text-black lg:text-white hover:text-gray-300 transition-all" href="">Portfolio</a>
                        <a class="text-black lg:text-white hover:text-gray-300 transition-all" href="">Contact</a>
                    </div>
                    <div>
                        <h3><a href="/register" class="font-bold">REGISTER</a></h3>
                    </div>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </body>
</html>
