<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            themes: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },  
        }
    </script>
    <title>Larragis | Find Laravel Jobs & Projects</title>
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="index.html">
            <img  class="w-24" src="{{asset('images/android-chrome-512x512.png')}}" alt="" class="logo">
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel">
                    <i class="fa-solid fa-user-plus"></i>Register
                </a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>Login
                </a>
            </li>
        </ul>
    </nav>
    
    <main>
    
    {{-- VIEW OUTPUT --}}
    @yield('content')
    </main>
    
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold text-white bg-laravel h-24 mt-24 opacity-90 md:justify-centre">
        <p class="ml-2 ">Copyright &copy; 2024, All rights reserved</p>
        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>
</html>