<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UdensKvalitate;
use App\Models\Vietas;

class UdensController extends Controller
{
    public function showALLudens() {
           $udens = UdensKvalitate::with('Vietas')->orderBy('ID', 'asc')->get();
           return view('udenskvalitate', ['udens' => $udens, 'is_logged' => session('is_logged', false)]);
    }

    public function delete($id) {
        UdensKvalitate::find($id)->delete();
        return redirect()->to('/allData/udenskvalitate')->with('delete', 'Ieraksts veiksmīgi izdzēsts!');
    }

    public function view($id) {
        $udens = UdensKvalitate::with('Vietas')->find($id);
    return view('udenskvalitate_view', ['udens' => $udens, 'is_logged' => session('is_logged', false)]);
    }

    public function edit($id) {
        $udens = UdensKvalitate::find($id);
    return view('udenskvalitate_edit', ['udens' => $udens, 'is_logged' => session('is_logged', false)]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Temperatura' => 'required|numeric',
            'pH' => 'required|numeric',
            'Dzelzs' => 'required|numeric',
            'Mangans' => 'required|numeric',
            'Fosfati' => 'required|numeric',
            'Nitrati' => 'required|numeric',
            'Nitriti' => 'required|numeric',
            'Mikroorganismi' => 'required|numeric',
        ]);

        $udens = UdensKvalitate::find($id);
        $udens->VietasID = $validated['VietasID'];
        $udens->Datums = $validated['Datums'];
        $udens->Laiks = $validated['Laiks'];
        $udens->Temperatura = $validated['Temperatura'];
        $udens->pH = $validated['pH'];
        $udens->Dzelzs = $validated['Dzelzs'];
        $udens->Mangans = $validated['Mangans'];
        $udens->Fosfati = $validated['Fosfati'];
        $udens->Nitrati = $validated['Nitrati'];
        $udens->Nitriti = $validated['Nitriti'];
        $udens->Mikroorganismi = $validated['Mikroorganismi'];
        $udens->save();

        return redirect()->to('/allData/udenskvalitate')->with('edit', 'Ieraksts veiksmīgi atjaunināts!');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'VietasID' => 'required',
            'Datums' => 'required|date',
            'Laiks' => 'required',
            'Temperatura' => 'required|numeric',
            'pH' => 'required|numeric',
            'Dzelzs' => 'required|numeric',
            'Mangans' => 'required|numeric',
            'Fosfati' => 'required|numeric',
            'Nitrati' => 'required|numeric',
            'Nitriti' => 'required|numeric',
            'Mikroorganismi' => 'required|numeric',
        ]);

        $udens = new UdensKvalitate();
        $udens->VietasID = $validated['VietasID'];
        $udens->Datums = $validated['Datums'];
        $udens->Laiks = $validated['Laiks'];
        $udens->Temperatura = $validated['Temperatura'];
        $udens->pH = $validated['pH'];
        $udens->Dzelzs = $validated['Dzelzs'];
        $udens->Mangans = $validated['Mangans'];
        $udens->Fosfati = $validated['Fosfati'];
        $udens->Nitrati = $validated['Nitrati'];
        $udens->Nitriti = $validated['Nitriti'];
        $udens->Mikroorganismi = $validated['Mikroorganismi'];
        $udens->save();

        return redirect()->to('/allData/udenskvalitate')->with('success', 'Ieraksts veiksmīgi pievienots!');
    }

    public function create() {
        $vietas = Vietas::all();
    return view('udenskvalitate_create', ['vietas' => $vietas, 'is_logged' => session('is_logged', false)]);
    }
}
