@extends("admin.adminLayout")
@section("content")
<div class="w-full bg-slate-300 h-full px-10 py-5">

    @if (Session::has('success'))
        <script>toastr.warning("{{Session::get('success')}}")</script>
    @endif
    <div class="box flex w-full justify-between">
        <h2 class="font-bold text-2xl mt-2">
            Marts
        </h2>
        <a href="{{route('CreateMarts')}}">
            <button class="p-3 bg-red-500 text-white font-bold rounded-sm">
                +
                Ajouter Categories
            </button>
        <button class="p-3 bg-green-500 text-white font-bold rounded-sm">
            +
            Ajouter Comptoire
        </button>
         </a>
    </div>
    <div class="box w-full border">
        <table class="table-auto border-collapse w-full">
            <th class="font-bold">
                <tr class="border p-4 font-bold" >
                    <td>S/L</td>
                    <td>Name</td>
                    <td>email</td>
                    <td>country</td>
                    <td>City</td>
                    <td>Actions</td>
                </tr>
            </th>
            @foreach ($marts as $mart)
            <tr class="border relative" id="mart-{{$mart->id}}">
                <td class="p-3">{{$mart->id}}</td>
                <td class="flex gap-2 p-2 "><img src="/images/{{$mart->mart_logo}}" class="w-10 h-10 rounded-full" alt=""> <p class="py-2">{{$mart->mart_name}}</p></td>
                <td class="p-3">{{$mart->mart_email}}</td>
                <td class="p-3">{{$mart->mart_country}}</td>
                <td class="p-3">{{$mart->mart_city}}</td>
                <td class="flex absolute top-3">
                    <a href="{{route("UpdateMart",$mart->id)}}" title="edit mart" class=" text-blue-500 text-xl"><i class="fa-regular fa-pen-to-square"></i></a>  
                    <a href="{{route("ManageMart",$mart->id)}}" title="Manage-mart"><i class="fa-solid fa-list-check text-blue-400 text-xl"></i></a>
                   <form id="{{$mart->id}}"  class=" m-0">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    @csrf
                    @method('delete')
                    <button  class="deleteMart text-red-500 mx-1 text-xl">
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
    $(document).ready(function(){
        $(".deleteMart").on("click",function(e){
            e.preventDefault();
             var id = $(this).parent().attr("id")
             var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type:"DELETE",
                url:"/admin/DeleteB/"+id,
                dataType:'json', 
                headers: {
        'X-CSRF-TOKEN': csrfToken
      },
                success:function(response){
                    $("#mart-"+id).load(' #mart-'+id)
                    toastr.warning(response.message)
                },
                error:function(xhr,status,error){
                    toastr.error("something went wrong")
                    console.log(xhr.responseText)
                }
            })
        })
    })
</script>
@endsection