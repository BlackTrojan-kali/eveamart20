<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-orange-100 font-Rob">
    <section class="block m-4 md:mx-60 md:my-10  md:flex rounded-md   bg-white  md:overflow-hidden md:m-24 shadow-lg md:w-2/3" >
        <div class="hidden lg:block  overflow-hidden w-2/3">
            <img src="/images/26985415_v864-mind-foodillustrations-39.jpg" class="w-100"  alt="">            
        </div>
        <div class="p-3  block w-11/12">
            <img src="/images/logoEveamart.png" width="200px" alt="">
            <div class=" p-4 ">
                <h1 class="font-National font-bold text-3xl m-1">Salut !! <br>
                Connectez vous comme <span class="text-red-600">Admin.</span></h1>
                <form action="{{route('adminAuth')}}" method='POST'>
                    @csrf
                    @if($errors)
                        <span class="text-red-500">
                            @foreach ($errors->all() as $error )
                                {{$error}}
                            @endforeach
                        </span>
                    @endif
                <div class="  block mt-6">
                    <label for="Email" class="font-bold">Email:</label> <br>
                    <input type="text"  name="email"class="font-thin rounded-lg h-14 w-full border-gray-300 mt-2" placeholder="Entrez votre addresse email">
                    @if($errors->has('email'))
                        <span class="text-red-500">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class=" block mt-6">
                    <label for="Password" class="font-bold">Mot de passe:</label> <br>
                    <input type="password" name="password" class=" font-thin rounded-lg h-14 w-full border-gray-300 mt-2" placeholder="entrez votre mot de passe">
                    @if($errors->has('password'))
                        <span class="text-red-500">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="flex justify-between py-5">
                    <div>
                    <input type="checkbox" name="" id="">
                    Rester connecte
                    </div>
                    <a class="text-green-400">mot de pass oublie ?</a>
                </div>
                <div class="block py-5 justify-between">
                    <button type="submit" class="bg-green-400 p-3 rounded-sm  text-white w-11/12  hover:bg-orange-500 transition-all duration-500">
                        LogIn
                    </button>
                </div>
            </form>
                <p class="py-2">
                    se connecter en tant que utilisateur? <a class="text-green-500" href="/loginAdmin"> connexion</a>
                </p>
            </div>
        </div>
    </section>    
</body>
</html>