<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaisaKvalitate;
use App\Models\Vietas;

class GaisaController extends Controller
{
    public function showALLgaiss() {
           $gaiss = GaisaKvalitate::with('Vietas')->orderBy('ID', 'asc')->get();
           return view('gaisakvalitate', ['gaiss' => $gaiss, 'is_logged' => session('is_logged', false)]);
    }

    public function delete($id) {
        GaisaKvalitate::find($id)->delete();
        return redirect()->to('/allData/gaisakvalitate')->with('delete', 'Ieraksts veiksmīgi izdzēsts!');
    }

    public function view($id) {
    $gaiss = GaisaKvalitate::with('Vietas')->find($id);
    return view('gaisakvalitate_view', ['gaiss' => $gaiss, 'is_logged' => session('is_logged', false)]);
    }

    public function edit($id) {
        $gaiss = GaisaKvalitate::find($id);
    return view('gaisakvalitate_edit', ['gaiss' => $gaiss, 'is_logged' => session('is_logged', false)]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Temperatura' => 'required|numeric',
            'Mitrums' => 'required|numeric',
            'Putekli' => 'required|numeric',
            'Smakas' => 'required|numeric',
            'Mikroorganismi' => 'required|numeric',
        ]);

        $gaiss = GaisaKvalitate::find($id);
        $gaiss->VietasID = $validated['VietasID'];
        $gaiss->Datums = $validated['Datums'];
        $gaiss->Laiks = $validated['Laiks'];
        $gaiss->Temperatura = $validated['Temperatura'];
        $gaiss->Mitrums = $validated['Mitrums'];
        $gaiss->Putekli = $validated['Putekli'];
        $gaiss->Smakas = $validated['Smakas'];
        $gaiss->Mikroorganismi = $validated['Mikroorganismi'];
        $gaiss->save();

        return redirect()->to('/allData/gaisakvalitate')->with('edit', 'Ieraksts veiksmīgi atjaunināts!');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Temperatura' => 'required|numeric',
            'Mitrums' => 'required|numeric',
            'Putekli' => 'required|numeric',
            'Smakas' => 'required|numeric',
            'Mikroorganismi' => 'required|numeric',
        ]);

        $gaiss = new GaisaKvalitate();
        $gaiss->VietasID = $validated['VietasID'];
        $gaiss->Datums = $validated['Datums'];
        $gaiss->Laiks = $validated['Laiks'];
        $gaiss->Temperatura = $validated['Temperatura'];
        $gaiss->Mitrums = $validated['Mitrums'];
        $gaiss->Putekli = $validated['Putekli'];
        $gaiss->Smakas = $validated['Smakas'];
        $gaiss->Mikroorganismi = $validated['Mikroorganismi'];
        $gaiss->save();

        return redirect()->to('/allData/gaisakvalitate')->with('success', 'Ieraksts veiksmīgi pievienots!');
    }

    public function create() {
        $vietas = Vietas::all();
    return view('gaisakvalitate_create', ['vietas' => $vietas, 'is_logged' => session('is_logged', false)]);
    }
}
