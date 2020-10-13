<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pets_by_user;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function getAllUsers(){
        return response() -> json(User::all());
    }
    
    public function getUser($id){
        $pets = array( 'pets_id' => Pets_by_user::where('user_id', $id) -> get() -> pluck('pet_id'));
        $user = User::find($id);
        return response() -> json([$user, $pets]);
    }
    
    public function createUser(Request $request){
        $user = User::create($request -> all());
        return response() -> json($user);
    }
}
?>