@extends("admin.adminLayout")
@section("content")
<div class="w-full bg-slate-300 h-full px-10 py-5">
    @if(Session::has('success'))
        <script>
            toastr.success("{{Session::get('success')}}")
        </script>
    @endif
    <div class="box  w-full ">
        <h2 class="font-bold text-2xl mt-2">
          Ajouter  Une Categorie
        </h2>
    </div>


    <div class="w-11/12">

        <form action="{{route('AddCategory')}}" enctype="multipart/form-data" method="POST" class="w-full">
            @csrf
        <div class="w-full box">
            <h2 class="font-bold">
                Information generales
            </h2>
                <div class="inputs">
                    <label for="">Nom du Comptoire<span class="text-red-500">*</span></label>
                    <input name="name" required type="text" class="my-input" placeholder="titre du blog">
                    @if($errors->has('name'))
                    <span class="text-red-500">{{$errors->first('name')}}</span>
                    @endif
                </div>

        <button class="btn w-3/12 bg-red-500 p-2 rounded-md text-white" type="submit">
            <i class="fa-solid fa-floppy-disk"></i>  Envoyer
        </button>
    </form>
    
    </div>

    <div class="box w-full my-3">
        <h2 class="font-bold">
            liste des categories  </h2>
            <br>
            <table class="table-auto w-full">
                <th>
                    <tr class="font-bold border p-3 flex justify-between">
                        <td></td>
                        <td>category Name</td>
                        <td>Action</td>
                    </tr>
                </th>
                @foreach ($categories as $cat )
                <tr class="border flex justify-between p-2">
                    <td>
                        <i class="fa-solid fa-arrow-right"></i> 
                    </td>
                    <td>
                        {{$cat->category_name}}
                    </td>
                    <td class="flex ">
                        <a href="{{route('UpdateCategory',$cat->id)}}" class="text-purple-500 text-xl"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="">
                            @csrf
                            @method('delete')
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <button class="text-red-500 text-xl ">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>    
                @endforeach
                
            </table>
        
            
           

    </div>
</div>
<script>
</script>
@endsection