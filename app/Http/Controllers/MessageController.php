<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $msg = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],
        [
            //Mensajes personalizados
            'name.required' => 'Se necesita tú nombre'
        ]);        
        
        Mail::to($msg['email'])->queue(new MessageReceived($msg));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   
}
