<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialisti;

class SpecialistiController extends Controller
{
    public function showALLspecialisti() {
        $specialists = Specialisti::all();
    return view('specialisti', ['specialists' => $specialists, 'is_logged' => session('is_logged', false)]);
    }

    public function delete($id) {
        $specialist = Specialisti::find($id)->delete();;
        return redirect('/allData/specialisti')->with('delete', 'Ieraksts veiksmīgi izdzēsts!');
    }

    public function view($id) {
        $specialist = Specialisti::find($id);
    return view('specialisti_view', ['specialist' => $specialist, 'is_logged' => session('is_logged', false)]);
    }

    public function store(Request $request) {
        $request->validate([
            'Vards' => 'required',
            'Uzvards' => 'required',
            'Specializacija' => 'required',
            'DarbaDienas' => 'required',
            'TelefonaNumurs' => 'required'
        ]);

        $specialist = new Specialisti;
        $specialist->Vards = $request->Vards;
        $specialist->Uzvards = $request->Uzvards;
        $specialist->Specializacija = $request->Specializacija;
        $specialist->DarbaDienas = $request->DarbaDienas;
        $specialist->TelefonaNumurs = $request->TelefonaNumurs;
        $specialist->save();

        return redirect('/allData/specialisti')->with('success', 'Ieraksts veiksmīgi pievienots!');
    }

    public function edit($id) {
        $specialist = Specialisti::find($id);
    return view('specialisti_edit', ['specialist' => $specialist, 'is_logged' => session('is_logged', false)]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'Vards' => 'required',
            'Uzvards' => 'required',
            'Specializacija' => 'required',
            'DarbaDienas' => 'required',
            'TelefonaNumurs' => 'required'
        ]);

        $specialist = Specialisti::find($id);
        $specialist->Vards = $request->Vards;
        $specialist->Uzvards = $request->Uzvards;
        $specialist->Specializacija = $request->Specializacija;
        $specialist->DarbaDienas = $request->DarbaDienas;
        $specialist->TelefonaNumurs = $request->TelefonaNumurs;
        $specialist->save();

        return redirect('/allData/specialisti')->with('edit', 'Ieraksts veiksmīgi atjaunots!');
    }
}
