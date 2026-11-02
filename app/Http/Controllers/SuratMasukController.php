<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncommingLetter;

class SuratMasukController extends Controller
{
    public function index()
    {
       $suratmasuk=IncommingLetter::all();

        return view('surat-masuk.index', compact('suratmasuk'));
    }

  public function show($id)
{
    $surat = IncommingLetter::findOrFail($id);

    return view('surat-masuk.show', compact('surat'));
}
}