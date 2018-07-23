<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conocenos;

class ConocenosController extends Controller
{
    public function index()
    {
        return view('conocenos');
    }
    public function crear(Request $request)
    {
        $txt_conocenos = $request->input('conocenos');

        $obj_conocenos = new Conocenos();
        $obj_conocenos->conocenos = $txt_conocenos;
        $obj_conocenos->save();
        return redirect()->route('conocenos.lista');
    }
    public function lista()
    {
        $conocenos = Conocenos::all();
        return view('informacion', compact('conocenos'));
    }
}
