<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anonce;

class OffreController extends Controller
{
    public function index()
    {
        // $offre = anonce::paginate(6);
        $offre = anonce::get();

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
        // dd(auth()->user()->anonces);
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
        // return back(); ---> redirect to the same page
        return redirect()->route('offre');
    }

    public function deleteOffre(int $id)
    {
        // dd($anonce);

        // if($anonce->delete()){
        //     die('1');
        // }else{
        //     ('0');
        // }

        // dd($id);
        // anonce::destroy($id);
        anonce::where('annonce_id', $id)->delete();
        return back();
    }

    // public function updatede()
    // {
    // }
}
