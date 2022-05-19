<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anonce;

class OffreController extends Controller
{
    public function index()
    {
        $offre = anonce::paginate(4);
        // $offre = anonce::get();

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
}
