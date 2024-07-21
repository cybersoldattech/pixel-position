<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js' , 'resources/css/app.css'])
    <title>PIxel position</title>
</head>

<body class="bg-black text-white">
    <div class="px-10">

        <nav class="flex justify-between items-center  border-b py-4">
            <div>
                <a href="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo"></a>
            </div>

            <div class="space-x-5 font-bold">
                <a href="#" alt="">Jobs</a>
                <a href="#" alt="">Careers</a>
                <a href="#" alt="">Salaries</a>
                <a href="#" alt="">Compagnies</a>
            </div>

            <div>Post a job</div>

        </nav>

        <main class="max-w-[916px] mx-auto">
            {{ $slot }}
        </main>

    </div>
</body>

</html>
