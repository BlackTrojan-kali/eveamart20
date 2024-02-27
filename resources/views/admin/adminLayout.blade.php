<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="flex font-Rob">
   <section class="sideba hidden md:block md:flex-initial md:w-3/12 border-gray-200 border ">
            <div class="sidehead w-full border border-grey-200">
            <img src="/images/logoEveamart.png" class="w-36" alt="">
            </div>
            <div class="sideUser relative flex text-sm gap-2 p-5">
                <img src="/images/apple.jpg" class="rounded-full w-10 h-10" alt="">
                <span class="w-2 h-2 bg-green-500 rounded-full absolute left-14 top-11"></span>
                <div>
                    <b>{{Auth::guard('admin')->user()->username}}</b>
                    <p class="font-thin">{{Auth::guard('admin')->user()->super ? "Super admin":"Admin" }}</p>
                </div>
            </div>
            <div class="links w-full overflow-y-scroll">
                <ul class="w-full py-10">
                    <li class="w-11/12 bg-blue-400 text-blue-800 text-start mx-2 rounded-sm p-1">
                        <a href="/admin/dashboard"><i class="fa-solid fa-chart-simple mx-2"></i>Dashboard</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-database mx-2"></i>Stocks</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-cart-shopping mx-2"></i>Orders</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-bag-shopping mx-2"></i>Products</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-blog mx-2"></i>Blogs</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-shop mx-2"></i>Marts</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-regular fa-user mx-2"></i>Users</a>
                    </li>
                    <br>

                <ul class="mt-3 border">
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href={{route("addAdmin")}}><i class="fa-solid fa-gears mx-2"></i>admins</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href={{route("profile")}}"><i class="fa-solid fa-book mx-2"></i>Roles</a>
                    </li>
                    <li class="w-11/12  text-start mx-2 rounded-sm p-1 my-1">
                        <a href=""><i class="fa-solid fa-right-from-bracket mx-2" href="{{ route('adminlogout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"></i>logout</a>
                             <form id="logout-form" action="{{ route('adminlogout') }}" method="POST">
                                @csrf
                            </form>
                    </li>
                </ul>
                </ul>
            </div>
        </section>
   <section class="w-full md:w-9/12">
    <header class="w-full p-4 border flex justify-between">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="flex">
            <div class="relative">
                <i class="fa-regular fa-bell mx-2 cursor-pointer"></i>
                <span class="w-2 h-2 bg-red-600 absolute rounded-full animate-ping top-4 right-1"></span>
                <span class="w-2 h-2 bg-red-600 absolute rounded-full top-4 right-1"></span>
            </div>
            <div class="relative">
                <img src="/images/apple.jpg" class="rounded-full w-5 h-5 cursor-pointer" alt="">
                <span class="w-2 h-2 bg-green-500 rounded-full absolute right-0 top-4"></span>
            </div>
        </div>
    </header>
    @yield('content')
    
   </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>