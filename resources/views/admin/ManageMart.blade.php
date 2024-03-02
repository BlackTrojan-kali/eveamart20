@extends("admin.adminLayout")
@section("content")

@if($errors->any())
    @foreach ($errors->all() as $error )
        
        <script>
            toastr.warning("{{$error}}")
        </script>

    @endforeach
@endif
<div class="w-full bg-slate-300 h-full px-10 py-5">
   <div class="box w-full flex justify-between">
    <h2 class="font-bold text-2xl">Manage Mart</h2>
    <div>
        <a href="{{route("AssignMart",$mart->id)}}">
        <button class="bg-blue-800 text-white p-2 rounded-sm border">
            <i class="fa-solid fa-user mx-2"></i>Ajouter Un Admin
        </button>
        </a>
        <button class="bg-orange-500 text-white p-2 rounded-sm border">
            <i class="fa-solid fa-cart-shopping mx-2"></i>+Ajouter Un Produit
        </button>
        <button class="bg-green-500 p-2 rounded-sm text-white">
            + Ajouter Une Offre
        </button>
    </div>
   </div>
   <div class="stats grid grid-cols-3 gap-2">
    <div class="box text-white font-bold text-xl bg-orange-500">
        Nombre de produits
        <br>
        {{$mart->has_products? count($mart->has_products):0}}
    </div>
    <div class="box text-white bg-lime-500 text-xl font-bold">
        Nombre d'offres
        <br>
        {{$mart->generatedOffers? count($mart->generatedOffers):0}}
    </div>
    <div class="box text-white bg-purple-500 text-xl font-bold">
        Nombre d'Administrateurs
        <br>
        {{$mart->isManagedBy? count($mart->isManagedBy):0}}
    </div>
    <div class="box text-white bg-yellow-500 text-xl font-bold">
        Nombre d'offres
        <br>
        {{$mart->generatedOffers? count($mart->generatedOffers):0}}
    </div>
    <div class="box text-white bg-pink-500 text-xl font-bold">
        Nombre de followers
        <br>
        {{$mart->isFollowedBy? count($mart->isFollowedBy):0}}
    </div>
   </div>
   <div class="box my-4">
        <h2 class="text-xl font-bold">
            Liste Des Produits
        </h2>
        <table class="auto-table">
        </table>
   </div>
   <div class="box my-4">
        <h2 class="text-xl font-bold">
            Liste Des Administrateurs
        </h2>
        <table class="auto-table w-full">
            <th class="w-full">
                <tr class="flex justify-between font-bold my-2 border p-2">
                    <td>S/L</td>
                    <td>username</td>
                    <td>email</td>
                </tr>
            </th>
            @foreach ($mart->isManagedBy as $admins)
            <tr class="border flex justify-between p-2">
                <td>{{$admins->id}}</td>
                <td>{{$admins->username}}</td>
                <td>{{$admins->email}}</td>
            </tr>
            @endforeach
        </table>
   </div>
</div>
@endsection
