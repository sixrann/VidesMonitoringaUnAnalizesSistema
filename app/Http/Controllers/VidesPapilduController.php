<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VidesPapildu;
use App\Models\Vietas;

class VidesPapilduController extends Controller
{
    public function showALLvidespapildu() {
           $papildu = VidesPapildu::with('Vietas')->orderBy('ID', 'asc')->get();
           return view('videspapildu', ['papildu' => $papildu, 'is_logged' => session('is_logged', false)]);
    }

    public function delete($id) {
        VidesPapildu::find($id)->delete();
        return redirect()->to('/allData/videspapildu')->with('delete', 'Ieraksts veiksmīgi izdzēsts!');
    }

    public function view($id) {
        $papildu = VidesPapildu::with('Vietas')->find($id);
    return view('videspapildu_view', ['papildu' => $papildu, 'is_logged' => session('is_logged', false)]);
    }

    public function edit($id) {
        $papildu = VidesPapildu::find($id);
    return view('videspapildu_edit', ['papildu' => $papildu, 'is_logged' => session('is_logged', false)]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Apraksts' => 'required',
        ]);

        $papildu = VidesPapildu::find($id);
        $papildu->VietasID = $validated['VietasID'];
        $papildu->Datums = $validated['Datums'];
        $papildu->Laiks = $validated['Laiks'];
        $papildu->Apraksts = $validated['Apraksts'];
        $papildu->save();

        return redirect()->to('/allData/videspapildu')->with('edit', 'Ieraksts veiksmīgi atjaunināts!');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Apraksts' => 'required',
        ]);

        $papildu = new VidesPapildu();
        $papildu->VietasID = $validated['VietasID'];
        $papildu->Datums = $validated['Datums'];
        $papildu->Laiks = $validated['Laiks'];
        $papildu->Apraksts = $validated['Apraksts'];
        $papildu->save();

        return redirect()->to('/allData/videspapildu')->with('success', 'Ieraksts veiksmīgi pievienots!');
    }

    public function create() {
        $vietas = Vietas::all();
    return view('videspapildu_create', ['vietas' => $vietas, 'is_logged' => session('is_logged', false)]);
    }
}
