<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CarController extends Controller {

    public function createCar(Request $request) {

        $car = Car::create($request->all());

        return response()->json($car);
    }

    public function update($id, Request $request) {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json($car, 200);
    }

    public function deleteCar($id) {
        $car = Car::find($id);
        $car->delete();

        return response()->json('Removido com Sucesso');
    }

    public function Gc($parammeters) {
        switch ($parammeters) {
            case 'carro':
                $id = Input::get('id');
                return response()->json(Car::find($id));
                break;

            case 'marca':
                $make = Input::get('make');
                $cars = Car::where('make', $make)->get();
                return response()->json($cars);
                break;

            case 'modelo':
                $model = Input::get('model');
                $cars = Car::where('model', $model)->get();
                return response()->json($cars);
                break;

            case 'mm':
                $carr = Input::get('res');
                $resultado = Car::where('make', $carr)->orWhere('model', $carr)->get();
                return response()->json($resultado);
            break;

            case 'todos':
                $cars = Car::all();
                return response()->json($cars);
                break;
        }
    }

}