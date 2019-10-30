<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Car;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $cars = Car::where('owner_id', $id)->get();
//        dd($cars)
        return view('user.profile', compact('cars'));

    }

    public function create()
    {

        $cars = new Car();
        $cars->model =request();
        $cars->brand = request();
        $cars->img = request();
        $cars->carName = request();
        $cars::save();
//        var_dump($cars);
    }
}
