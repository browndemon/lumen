<?php
namespace App\Http\Controllers;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller{
    
    public function createCar(Request $request){
        
        $car = Car::create($request->all());
        
        return response()->json($car);
    }
    
    public function deleteCar($id){
        $car = Car::find($id);
        $car->delete();
        
        return response()->json('Removido com Sucesso');
    }
    
    public function index(){
        
        $cars = Car::all();
        
        return response()->json($cars);
    }
}
