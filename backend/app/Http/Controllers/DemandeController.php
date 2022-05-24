<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anonce;

class DemandeController extends Controller
{
    public function index()
    {


        $demande = anonce::where('type', 'demande')->get();

        foreach($demande as $val){
            $val->file = 'img/' . $val->file;
        }

        return view('pages/demande', [
            'demandes' => $demande
        ]);
    }

    public function popAdd()
    {
        return view('pages/addDemande');
    }

    public function addDemande(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'prix' => 'required',
            'file' => 'required',
        ]);


        $request->user()->anonces()->create([

            'title'   => $request->title,
            'body'    => $request->body,
            'prix'    => $request->prix,
            'file'    => $request->file,
            'type'    => $request->type,
        ]);
        return redirect()->route('demande');
    }

    public function deleteDemande(int $id)
    {
        anonce::where('annonce_id', $id)->delete();
        return back();
    }


}
