<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eveamart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="">
   <header class="relative font-Rob  md:flex bg-green-700 w-full">
    <div class="header-info hidden md:flex md:justify-between text-white p-5 mx-36">
        <p>bienvenue sur eveamart2.0</p>
        <div class="moreinfo flex ml-32">
            <p>chendjousil@gmail.com |</p>
            <p> Location | </p>
            <p> Francais |</p>
            <p> Fcfa    |</p>

        </div>
    </div>
    <nav class="flex drop-shadow-md bg-white p-1 w-full   absolute top-0 md:top-11 md:mx-40 md:w-8/12">      
    <img src="/images/logoEveamart.png" alt="eveamart-logo" class="w-40">
        <div class="links hidden mt-7  md:flex justify-between gap-5 text-gray-800">
                <a href="/">Home</a>
                <a href="">Boutiques</a>
                <a href="">Offres</a>
                <a href="">Pages</a>
        </div>
    @guest
        
        <div class="buttons mx-4  text-2xl md:text-xl  flex justify-between">
           <a href="/login"> <i class="fa-regular fa-user mt-4"></i></a>
            <div class="relative ml-2 h-100">
            <i class="fa-solid fa-bag-shopping relative cursor-pointer mt-4"> </i>
            <span class="absolute top-3 text-sm font-bold  rounded-full text-center  bg-orange-400 w-5 h-5 text-white">0</span>
             </div>
            </div>
            @else
            <div class="buttons mx-4  text-2xl md:text-xl  flex justify-between">
                 <div class="relative ml-2 h-100">
                 <i class="fa-solid fa-bag-shopping relative cursor-pointer mt-3"> </i>
                 <span class="absolute top-2 text-sm font-bold  rounded-full text-center  bg-orange-400 w-5 h-5 text-white">0</span>
                  </div>

                <a href="/profile" class="mt-4 mx-4 text-sm"> 
                @if(Auth::user()->profile)
                    <img src="/images/{{Auth::user()->profile}}" class="rounded-full w-10 h-10 border-2 mx-2 border-black" alt="">
                @else
                    "{{Auth::user()->name}}"
                @endif
                </a>
                  <a class="mt-4 text-red-500 cursor-pointer" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    >Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                 </div>
     @endguest
        <div class="icons flex">
        <div class="close md:hidden  mt-6 ml-20">
            <i class="fa-solid fa-bars text-2xl cursor-pointer"></i> 
        </div>
        </div>
    </nav>
    </header>
    <br><br>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>