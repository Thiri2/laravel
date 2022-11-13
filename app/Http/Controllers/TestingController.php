<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function blade()
    {
        $name = '<h2>Thiri Aung<h2>';
        $r = ['A', 'B', 'C'];
        $users = [["name" => "Thiri", "type" => 1, "number" => 1] , ["name" => "Thiri1", "type" => 2, "number" => 2], ["name" => "Thiri2", "type" => 3, "number" => 3]];
        //dd($users);
        //dd($r); //another way for print_r and die()
        // print_r($r);
        // die();
        return view('frontend.blade', ['name' => $name, 'records' => $r, 'users' => $users]);
    }
}

