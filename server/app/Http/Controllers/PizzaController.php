<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function pizza_list(){
        return Pizza::all();
    }
    public function pizza_detail($id){
        return Pizza::find($id); // return Pizza::where("id, $id)->first();
    }
    public function pizza_add(REQUEST $request){

        $pizzaData = json_decode($request->getContent());
        
        $pizza = new Pizza();

        $pizza->name = $pizzaData->name;
        $pizza->image = $pizzaData->image;
        $pizza->price = $pizzaData->price;
        $pizza->dough = $pizzaData->dough;
        $pizza->allergen = $pizzaData->allergen;
        $pizza->description = $pizzaData->description;

        $pizza->save();
        return response()->json($pizza, 201);
    }
    public function pizza_edit(REQUEST $request, $id){
        
        $pizza = Pizza::find($id);
        $pizzaData = json_decode($request->getContent());

        $pizza->name = $pizzaData->name;
        $pizza->image = $pizzaData->image;
        $pizza->price = $pizzaData->price;
        $pizza->dough = $pizzaData->dough;
        $pizza->allergen = $pizzaData->allergen;
        $pizza->description = $pizzaData->description;

        $pizza->save();
        return response()->json($pizza, 201);

    }
    public function pizza_delete($id){
        return Pizza::destroy($id);
    }
}
