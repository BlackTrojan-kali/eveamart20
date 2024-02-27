@extends("layout.appLayout")
@section("content")
<div>
    @if($message = Session::get('success'))
    <div class="rounded-md shadow-sm p-10 text-green-500">
        {{$message}}
    </div>
    @else
        <div class="p-10 w-60 rounded-md shadow-sm  text-green-500">
            you have to loggin
        </div>
    @endif
</div>
@endsection