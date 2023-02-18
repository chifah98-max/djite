<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('type/index', ['types' => $types]);
        
    }
    public function create()
    {
        return view('type/create');
    }
    public function store(Request $request)
    {
        Type::create([
            'libelle' => $request->libelle,
        ]);
        return redirect('type')->with('message ');
    }
}
