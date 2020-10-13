<?php
namespace App\Http\Controllers;
use App\Models\Specie;
use App\Models\Things_by_specie;
use Illuminate\Http\Request;

class SpecieController extends Controller{
    public function getAllSpecies(){
        return response() -> json(Specie::all());
    }
    
    public function getSpecie($id){
        $specie = Specie::find($id);
        $things = Things_by_specie::where('specie_id', $id) -> get();
        return response() -> json([$specie, $things]);
    }
    
    public function createSpecie(Request $request){
        $specie = Specie::create($request -> all());

        return response() -> json($specie);
    }
}
?>