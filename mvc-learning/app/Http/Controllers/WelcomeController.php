<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public static function index(){
        return view('welcome',['name' => UserModel::all()]);
    }
    public static function display()
    {
        return response(UserModel::all());
    }
}
