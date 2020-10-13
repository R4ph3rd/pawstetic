<?php

namespace App\Http\Controllers;
use App\Models\Thing;
use App\Models\Things_by_pet;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ThingController extends BaseController
{
    //
    public function getAllThings(){
        return response() -> json(Thing::all());
    }

    public function getThing($id){
        return response() -> json(Thing::find($id));
    }

    public function getPetsOwningThing($id){
        return response() -> json(Things_by_pet::where('thing_id', $id) -> get());
    }

    public function createThing(Request $request){
        return response() -> json(Thing::create($request -> all()));
    }
}
