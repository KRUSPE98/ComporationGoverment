<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        // $contact = new Contacts();
        // $contact->Name = $request->Name;
        // $contact->Email = $request->Email;
        // $contact->Phone = $request->Phone;
        // $contact->Message = $request->Message;
        // $contact->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }

    public function contactForm(Request $request)
    {
        // dd($request->all());
        $response = [
            'success' => false,
            'message' => ''
        ];

        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255'],
            'phone' => ['required','string','min:10','max:15'],
            'message' => ['required','string']
        ]);

        if($validator->fails()){
            $response['message'] = $validator->errors()->first();
            return response()->json($response, 422);
        }

        try {
            // Aquí envías el correo al administrador y al usuario
            // Enviar al administrador (puedes configurar una dirección en el archivo .env)
            Mail::to('admin@example.com')->send(new ContactFormMail($request->name, $request->email, $request->phone, $request->message, 'Nuevo mensaje de contacto'));

            // Enviar al usuario (confirmación)
            Mail::to($request->email)->send(new ContactFormMail($request->name, $request->email, $request->phone, $request->message, 'Confirmación de mensaje enviado'));

            $response['success'] = true;
            $response['message'] = 'Mensaje enviado correctamente';
        } catch (\Throwable $th) {
            $response['message'] = $th->getMessage();
        }

        return response()->json($response);
    }
}
