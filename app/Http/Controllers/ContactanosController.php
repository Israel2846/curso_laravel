<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        Mail::to('israaacolin@gmail.com')->send(new ContactanosMailable($request->all()));

        /* Primera manera de variables de sesion */
        // session()->flash('info', 'Mensaje enviado correctamente');

        /* Segunda manera de variables de sesion */
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado correctamente');
    }
}
