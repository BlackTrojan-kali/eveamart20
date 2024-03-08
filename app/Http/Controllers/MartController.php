<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mart;
use App\Models\Admin;
class MartController extends Controller
{
        //
    public function index(){
        $marts = Mart::all();
        return view("admin.AdminMart",["marts"=>$marts]);
    }
    public function createMart(){
        return view("admin.CreateMarts");
    }
    public function assign($idMart){
        $admins= Admin::where("super","=",0)->with("isRulingMart")->get();
        $mart = Mart::findOrFail($idMart);
        return view("admin.adminAssign",["admins"=>$admins,"mart"=>$mart]);
    }
    public function AssignAdmin($idAdmin,$idMart){
        $admin = Admin::find($idAdmin);
        $admin->isRulingMart()->attach($idMart);
        return response()->json(['message' =>"Admin Assigned successfully"]);
    }
    public function deleteAssignAdmin($idAdmin,$idMart){
        $admin = Admin::find($idAdmin);
        $admin->isRulingMart()->detach($idMart);
        return response()->json(['message' =>"Admin UnAssigned "]);
    }
    public function show($id){
        if(Auth::guard("admin")->user()->super){
        $mart = Mart::find($id)->with("isManagedBy","hasProducts","isFollowedBy","generatedOffers")->get();
        return view("admin.ManageMart",["mart"=>$mart[0]]);
    }else{
        $admin = Auth::guard("admin")->user();
 
            $mart = Mart::find($id)->with("isManagedBy","hasProducts","isFollowedBy","generatedOffers")->get();
            return view("admin.guestManageMart",["mart"=>$mart[0]]);
     
    }
    }
    
    
    public function create(Request $request){
        $request->validate([
            "name"=>"required|max:250|min:4|string",
            "country"=>"required",
            "email"=>"required|max:250|email",
            "city"=>"required|min:4|string",
            "mart_logo"=>"nullable|image|mimes:jpg,png,jpeg,webp|max:4096",
            "numMTN"=>"min:9|nullable",
            "numOrange"=>"min:9|nullable",
        ]);
        
        if(isset($request->mart_logo)){
            $filename=time().'.'.request()->mart_logo->getClientOriginalExtension();
            request()->mart_logo->move(public_path('images'),$filename);
        }

        $mart= new Mart();
        $mart->mart_name = $request->name;
        $mart->mart_logo = $filename;
        $mart->mart_country  = $request->country;
        $mart->mart_city  = $request->city;
        $mart->mart_email = $request->email;
        $mart->mtn_number=$request->numMTN;
        $mart->orange_number= $request->numOrange;
        $mart->save();
        return back()->withSuccess("Mart inserted Successfully");
}
public function UpdateMart($id){
    $mart = Mart::findOrFail($id);
    return view("admin.UpdateMart",["mart"=>$mart]);

}
public function Update(Request $request,$id){
    $mart = Mart::findOrFail($id);

    $request->validate([
        "name"=>"required|max:250|min:4|string",
        "country"=>"required",
        "email"=>"required|max:250|email",
        "city"=>"required|min:4|string",
        "mart_logo"=>"nullable|image|mimes:jpg,png,jpeg,webp|max:4096",
        "numMTN"=>"min:9|nullable",
        "numOrange"=>"min:9|nullable",
    ]);
    $filename = $mart->mart_logo;

    if(isset($request->mart_logo)){
        $filename=time().'.'.request()->mart_logo->getClientOriginalExtension();
        request()->mart_logo->move(public_path('images'),$filename);
    }

    $mart->mart_name = $request->name;
    $mart->mart_logo = $filename;
    $mart->mart_country  = $request->country;
    $mart->mart_city  = $request->city;
    $mart->mart_email = $request->email;
    $mart->mtn_number=$request->numMTN;
    $mart->orange_number= $request->numOrange;
    $mart->save();
    return back()->withSuccess("Mart inserted Successfully");
}
public function destroy($id){
    $mart = Mart::findOrFail($id);
    $mart->delete();
    return response()->json(["message"=>"Mart deleted successfully"]);
}
}