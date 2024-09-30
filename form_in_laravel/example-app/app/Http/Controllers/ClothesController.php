<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function index()
    {
        return view('clothes.index');  // This will be your list view of clothes
    }

    public function show($id)
    {
        // Mapping id to view names
        switch ($id) {
            case 1:
                return view('clothes.tshirt');
            case 2:
                return view('clothes.jeans');
            case 3:
                return view('clothes.jacket');
            default:
                return redirect('/clothes');  // Redirect to the clothes list if the id is not valid
        }
    }
}

