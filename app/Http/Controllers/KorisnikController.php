<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KorisnikController extends Controller
{
        Korisnik::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'citizenship' => $request->citizenship,
        'passport_number' => $request->passport_number,
        'dan_rodjenja' => $request->dan_rodjenja,
        'mesec_rodjenja' => $request->mesec_rodjenja,
        'godina_rodjenja' => $request->godina_rodjenja,
    ]);

    return redirect()->route('korisnik.index');
}
