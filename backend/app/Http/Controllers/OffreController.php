<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anonce;

class OffreController extends Controller
{
    public function index()
    {
        // $offre = anonce::paginate(6);
        $offre = anonce::where('type', 'offre')->get();
        // dd($offre);
        foreach($offre as $val){
            $val->file = 'img/' . $val->file;
        }

        return view('pages/offre', [
            'offres' => $offre
        ]);
    }

    public function popAdd()
    {
        return view('pages/addOffre');
    }

    public function addOffre(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'prix' => 'required',
            'file' => 'required',
        ]);

        // anonce::create([

        //     'user_id' => auth()->id(),
        //     'title'   => $request->title,
        //     'body'    => $request->body,
        //     'prix'    => $request->prix,
        //     'file'    => $request->file,
        //     'type'    => $request->type,
        // ]);

        // <=>

        $request->user()->anonces()->create([

            'title'   => $request->title,
            'body'    => $request->body,
            'prix'    => $request->prix,
            'file'    => $request->file,
            'type'    => $request->type,
        ]);
        return redirect()->route('offre');
    }

    public function deleteOffre(int $id)
    {
        anonce::where('annonce_id', $id)->delete();
        return back();
    }

    public function dataToEdite(int $id)
    {
        // die("ok");
        $anonceToUp = anonce::where('annonce_id', $id)->get();
        return view('pages/editeOffre',[
            'anonceToUp' => $anonceToUp
        ]);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'prix' => 'required',
            'file' => 'required',
        ]);

        // $anonce = anonce::where('annonce_id', $id)->get();
        // dd($anonce);
        // $anonce->title = $request->input('title');
        // $anonce->body = $request->input('body');
        // $anonce->prix = $request->input('prix');
        // $anonce->file = $request->input('file');
        // $anonce->update();
        // return redirect()->route('offre');

        $anonce = [
            'title' => $request->title,
            'body' => $request->body,
            'prix' => $request->prix,
            'file' => $request->file,
        ];

        anonce::where('annonce_id',$id)->update($anonce);
        return redirect(route('offre'));


    }
}
