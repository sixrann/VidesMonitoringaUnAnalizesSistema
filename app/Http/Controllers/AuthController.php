<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $account = \DB::table('accounts')
            ->where('email', $credentials['email'])
            ->first();

        if ($account) {
            try {
                $decrypted = Crypt::decryptString($account->password);
            } catch (\Exception $e) {
                $decrypted = null;
            }

            if ($decrypted !== null && hash_equals($decrypted, $credentials['password'])) {
            $request->session()->put('is_logged', true);
            if (isset($account->admin) && $account->admin == 1) {
                $request->session()->put('admin', true);
            } else {
                $request->session()->put('admin', false);
            }
            return view('app', ['is_logged' => true]);
            }
        }

        $request->session()->put('is_logged', false);
        return back()->with(['message' => 'Nepareizi dati'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->put('is_logged', false);
        $request->session()->forget('admin');
        return redirect('/login')->with(['message' => 'Jūs esat veiksmīgi izrakstījies!']);
    }

    public function register(Request $request)
    {
    $data = $request->only('email', 'password');

        $existingAccount = \DB::table('accounts')
            ->where('email', $data['email'])
            ->first();

        if ($existingAccount) {
            return back()->with(['message' => 'Šis e-pasts jau ir reģistrēts'])->withInput();
        }

        // Encrypt the password before storing (note: using reversible encryption - consider hashing)
        $encrypted = Crypt::encryptString($data['password']);

        \DB::table('accounts')->insert([
            'email' => $data['email'],
            'password' => $encrypted,
            'admin' => 0
        ]);

        return redirect('/login')->with(['create' => 'Reģistrācija veiksmīga! Lūdzu, piesakieties.']);
    }
}
