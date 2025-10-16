<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vietas;

class VietasController extends Controller
{
    public function showALLvietas() {
           $vietas = new Vietas();
           return view('vietas', ['vietas' => $vietas->orderBy('ID', 'asc')->get(), 'is_logged' => session('is_logged', false)]);
    }

    public function delete($id) {
        Vietas::find($id)->delete();
        return redirect()->to('/allData/vietas')->with('delete', 'Ieraksts veiksmīgi izdzēsts!');
    }

    public function view($id) {
        $vietas = Vietas::find($id);
    return view('vietas_view', ['vietas' => $vietas, 'is_logged' => session('is_logged', false)]);
    }

    public function edit($id) {
        $vietas = Vietas::find($id);
    return view('vietas_edit', ['vietas' => $vietas, 'is_logged' => session('is_logged', false)]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'Nosaukums' => 'required|max:255',
            'Apraksts' => 'required',
        ]);

        $vietas = Vietas::find($id);
        $vietas->Nosaukums = $validated['Nosaukums'];
        $vietas->Apraksts = $validated['Apraksts'];
        $vietas->save();

        return redirect()->to('/allData/vietas')->with('edit', 'Ieraksts veiksmīgi atjaunināts!');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'Nosaukums' => 'required|max:255',
            'Apraksts' => 'required',
        ]);

        $vietas = new Vietas();
        $vietas->Nosaukums = $validated['Nosaukums'];
        $vietas->Apraksts = $validated['Apraksts'];
        $vietas->save();

        return redirect()->to('/allData/vietas')->with('success', 'Ieraksts veiksmīgi pievienots!');
    }
}
