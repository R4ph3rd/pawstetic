<?php
namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\Things_by_pet;
use App\Models\Pets_by_user;
use Illuminate\Http\Request;

class PetController extends Controller{
    public function getAllPets(){
        return response() -> json(Pet::all());
    }
    
    public function getPet($id){
        $pet = Pet::find($id);
        $things = array( 'things' => Things_by_pet::where('pet_id', $id) -> get() -> pluck('thing_id')) ;
        $user = Pets_by_user::where('pet_id', $id) -> select('user_id') -> get()[0] ;
    
        return response() -> json([$pet, $things, $user]);
    }
    
    public function createPet(Request $request){
        $pet = Pet::create($request -> all());

        return response() -> json($pet);
    }
}
?>