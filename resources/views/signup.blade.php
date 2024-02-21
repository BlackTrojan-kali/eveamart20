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
                Creez votre  Compte.</h1>
                <div class="  block mt-6">
                    <label for="name" class="font-bold">Nom complet <span class="text-red-600">*</span></label> <br>
                    <input type="text" class="rounded-lg h-14 w-full border-gray-300 mt-2 font-thin " placeholder="Entrez votre nom">
                </div>
                <div class=" block mt-6">
                    <label for="email" class="font-bold">Email<span class="text-red-600">*</span></label> <br>
                    <input type="email" class="rounded-lg h-14 w-full border-gray-300 mt-2 font-thin" placeholder="entrez votre email">
                </div>

                <div class=" block mt-6">
                    <label for="Phone" class="font-bold">Telephone<span class="text-red-600">*</span></label> <br>
                    <input type="number" class="rounded-lg h-14 w-full border-gray-300 mt-2 font-thin" placeholder="XXXXXXXXX">
                </div>
                <div class=" block mt-6">
                    <label for="Password" class="font-bold">Mot de passe<span class="text-red-600">*</span></label> <br>
                    <input type="password" class="rounded-lg h-14 w-full border-gray-300 mt-2 font-thin" placeholder="Mot de passe">
                </div>
                <div class=" block mt-6">
                    <label for="CPassword" class="font-bold">Confirmez Mot de passe<span class="text-red-600">*</span></label> <br>
                    <input type="Cpassword" class="rounded-lg h-14 w-full border-gray-300 mt-2 font-thin" placeholder="confirmez le mot de passe">
                </div>
                <div class="block py-5 justify-between">
                    <button class="bg-green-400 p-3 rounded-sm  text-white w-11/12 hover:bg-orange-500 transition-all duration-500 ">
                        Creer le compte
                    </button>
                </div>
                <p class="py-2">
                    vous avez  deja un compte ? <a class="text-red-500" href="/login"> connexion</a>
                </p>
            </div>
        </div>
    </section>    
</body>
</html>