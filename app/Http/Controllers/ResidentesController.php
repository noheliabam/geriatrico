<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ResidentesController extends Controller {
	public function index() {
		$residentes = Residentes::all();

		return view('residente', compact('residentes'));
	}

	public function reservar() {

		return view('registrar_residentes');
	}

	public function guardar(Request $request) {
		$residente = new Residente;

		Residente::create($request->all());
		return redirect()->route('residente');
	}
}
