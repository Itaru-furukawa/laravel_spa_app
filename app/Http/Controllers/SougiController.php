<?php

namespace App\Http\Controllers;
use App\Sougi;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SougiController extends Controller
{
    public function index(){
        $collection = Sougi::all();
        $sorted = $collection->sortByDesc("id");
        return $sorted->values()->all();
    }
    public function show(Sougi $list)
    {
        return $list;
    }
    public function update(Request $request, Sougi $list){
        $list->update($request->all());
        return $list;
    }
    public function store(Request $request)
    {
        return Sougi::create($request->all());
    }
    public function destroy(Sougi $list){
        $list->delete();
        return $list;
    }
}
