<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function index(){
        $databes = inventory::all();
        return view('inventory.index', compact(['databes']));
    }
}
