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
    <h2>Dashboar Admin</h2>
    <div>
        <button class="bg-gray-100 p-2 rounded-sm border">
            <i class="fa-solid fa-cart-shopping mx-2"></i>gerer ventes
        </button>
        <button class="bg-green-500 p-2 rounded-sm text-white">
            + Ajouter produits
        </button>
    </div>
   </div>
</div>
@endsection