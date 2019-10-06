<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

        //blade
        return view('kategori_artikel.index', compact('listKategoriArtikel'));
        //return view('ketegori_artikel.index')->with('listKategori', $listKategoriArtikel);
    }

    public function show($id){
        //Elequent
        $KategoriArtikel=KategoriArtikel::where('id',$id)->first();// select * from kategori_artikel where id=$idlimit 1
        $KategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show', compact('KategoriArtikel'));
    }

    public function create(){
        return view('kategori_artikel.create');
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriArtikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }
}

