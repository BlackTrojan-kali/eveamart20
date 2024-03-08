<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    //
    public function index(){
        $users = User::all(); 
        return view("admin.usersList",["users"=>$users]);
    }
    public function ban($id){
        $user = User::findOrFail($id);
        $user->archived = !$user->archived;
        $user->save();
        if($user->archived){
        return response()->json(["message"=>"l'utilisateur a ete bani"]);
        }else{
            return response()->json(["message"=>"compte reactive"]);
        }
    }
}
