<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        return view('admin.contacts');
    }

    public function getData()
    {
        return Contact::all();
    }



    public function postStore(Request $request)
    {
        //return Contact::create($request->all());

        $contact = Contact::create($request->all());

        return response()->json($contact, 201);
    }


    public function postUpdate(Request $request)
    {
        if ($request->has('id')) {
            $record = Contact::find($request->input('id'));

            $record->update($request->all());
        }
        //$contact->update($request->all());

        return response()->json('hello', 200);
    }


    public function postDelete(Request $request)
    {
        if ($request->has('id')) {
            $record = Contact::where('id', $request->input('id'));

            $record->delete();
        }

        //$contact->delete();

        return response()->json(null, 204);
    }

    public function show(Contact $contact)
    {
        return $contact;
    }
}
