<?php

namespace App\Http\Controllers;
use App\Estimate;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class EstimateController extends Controller
{
    public function index(){
        return Estimate::all();
    }
    public function show(Estimate $est)
    {
        return $est;
    }
    public function update(Request $request, Estimate $est){
        $est->update($request->all());
        return $est;
    }
    public function store(Request $request)
    {
        return Estimate::create($request->all());
    }
    public function destroy(Estimate $est){
        $est->delete();
        return $est;
    }
}
