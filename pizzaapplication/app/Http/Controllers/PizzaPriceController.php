<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\PizzaPrice;

class PizzaPriceController extends Controller
{


    //stores the pizza in the database
    public function storePizza() {

        $pizza = new PizzaPrice();

        $pizza->name     = request('name');
        $pizza->price    = request('price');

        $pizza->save();

        return redirect('/pizzas/createthepizza')->with('mssg2', 'Pizza created!');
    }

    public function editPizza($id)
    {

        $pizza = PizzaPrice::findOrFail($id);

        $pizza->name     = request('name');
        $pizza->price    = request('price');

        $pizza->save();

        return redirect('/pizzas/createthepizza/display/')->with('mssg4', 'Pizza Updated!');
    }

    public function showPizzaToEdit($id)
    {
        $pizza = PizzaPrice::find($id);

        return view('pizzas.pizza_price_edit', ['pizza' => $pizza]);
    }

    public function show($id) {

        $pizza = PizzaPrice::findOrFail($id);

        return view('pizzas.pizza_price_show', ['pizza' => $pizza]);
    }

    public function display() {

        $pizzas = PizzaPrice::all();

//        dd($pizza);

        return view('pizzas.pizza_price_display', ['pizzas' => $pizzas]);
    }


    //just shows the view when navigation to /pizzas/createthepizza
    public function createPizza() {
        return view('pizzas.pizza_price');
    }

    //deletes the pizza if requested

    public function delete($id) {
        $pizza = PizzaPrice::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas/test1')->with('delete', 'Order complete');
    }

}
