<?php

namespace App\Http\Controllers;
use App\Manage;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ManageController extends Controller
{
    public function index(){
        return Manage::all();
    }
    public function showType1(){
        $collection = Manage::all()->where('type' , 1);
        $sorted = $collection->sortBy("id");
        return $sorted->values()->all();
    }
    public function showType2(){
        $collection = Manage::all()->where('type' , 2);
        $sorted = $collection->sortBy("id");
        return $sorted->values()->all();
    }
    public function showType3(){
        $collection = Manage::all()->where('type' , 3);
        $sorted = $collection->sortBy("id");
        return $sorted->values()->all();
    }
    public function show(Manage $est)
    {
        return $est;
    }
    public function update(Request $request, Manage $est){
        $est->update($request->all());
        return $est;
    }
    public function store(Request $request)
    {
        return Manage::create($request->all());
    }
    public function destroy(Manage $est)
    {
        $est->delete();
        return $est;
    }
}
