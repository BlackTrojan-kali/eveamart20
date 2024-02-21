<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-yellow-100">
    <section class="block m-4 md:mx-60 md:my-10  md:flex rounded-md   bg-white  md:overflow-hidden md:m-24 shadow-lg md:w-2/3" >
        <div class="hidden lg:block  overflow-hidden w-2/3">
            <img src="/images/26985415_v864-mind-foodillustrations-39.jpg" class="w-100"  alt="">            
        </div>
        <div class="p-3  block w-11/12">
            <img src="/images/logoEveamart.png" width="200px" alt="">
            <div class=" p-4 ">
                <h1 class=" font-bold text-3xl m-1">Salut !! <br>
                Bienvenue Sur <span class="text-red-600">Eveamart.</span></h1>
                <div class=" font-bold block mt-6">
                    <label for="Email">Email</label> <br>
                    <input type="text" class="rounded-lg h-14 w-full border-gray-300 mt-2" placeholder="Entrez votre addresse email">
                </div>
                <div class="font-bold block mt-6">
                    <label for="Password">Mot de passe:</label> <br>
                    <input type="password" class="rounded-lg h-14 w-full border-gray-300 mt-2" placeholder="entrez votre mot de passe">
                </div>
                <div class="flex justify-between py-5">
                    <div>
                    <input type="checkbox" name="" id="">
                    Rester connecte
                    </div>
                    <a class="text-green-400">mot de pass oublie ?</a>
                </div>
                <div class="block py-5 justify-between">
                    <button class="bg-green-400 p-3 rounded-sm  text-white w-11/12  hover:bg-orange-00 transition-all duration-500">
                        LogIn
                    </button>
                    <button class="text-black mt-2 p-3 rounded-sm border-2 border-gray  w-11/12">
                        Sign with Google
                    </button>
                </div>
                <p class="py-2">
                    vous n'avez pas de compte ? <a class="text-red-500" href="/signup"> creer un compte</a>
                </p>
            </div>
        </div>
    </section>    
</body>
</html>