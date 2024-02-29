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

    public function create(){
        return view('inventory.create');
    }

    public function store(Request $request){
        inventory::create($request->except(['_token','submit']));
        return redirect('/inventory');
    }

    public function edit($id){
        $inventory = inventory::find($id);
        return view('inventory.edit', compact(['inventory']));
    }

    public function update($id, Request $request){
        $inventory = inventory::find($id);
        $inventory->update($request->except(['_token','submit']));
        return redirect('/inventory');
    }

    public function delete($id){
        $inventory = inventory::find($id);
        $inventory->delete();
        return redirect('/inventory');
    }
}
