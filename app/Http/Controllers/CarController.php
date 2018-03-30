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
            case 'GetOneCar':
                $id = Input::get('id');
                return response()->json(Car::find($id));
                break;

            case 'Make':
                $make = Input::get('make');
                $carm = Car::where('make', $make);
                return response()->json($carm);

            case 'index':
                $cars = Car::all();
                return response()->json($cars);
                break;
        }
    }

}