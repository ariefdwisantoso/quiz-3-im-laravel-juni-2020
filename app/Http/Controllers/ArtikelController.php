<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index(){

        $artikel = DB::table('artikel')->get();
        return view('/artikel', ['artikel' => $artikel]);
    }

    public function create(){
        return view ('artikel/create');
    }

    public function store(Request $request, $id){
    
        $this -> validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'tag' => 'required',
        ]);
        
        DB::table('artikel') -> insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => $request->Str::slug($request->get('judul')),
            'tag' => $request->tag,
            'user_id' => $request->user_id,
        ]);
    
        return redirect('/artikel') -> with('status', 'Data Artikel Berhasil Ditambahkan');
    }

    public function edit($id){
        
        $artikel = DB::table('artikel')->where('id',$id)->first();
        return view('artikel.edit.{id}', compact('artikel'));
    }

    public function update(Request $request, $id){
        $this -> validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'tag' => 'required',
        ]);
    
    DB::table('artikel') -> where('id', $request -> id) -> update([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'slug' => $request->Str::slug($request->get('judul')),
        'tag' => $request->tag,
        'user_id' => $request->user_id,
    ]);
   
    return redirect('/artikel') -> with('status', 'Data Artikel Berhasil DiUbah');
    }

    public function destroy($id){
    
    DB::table('artikel') -> where('id', $id) -> delete();
    return redirect('/artikel') -> with('status', 'Data Artikel Berhasil DiHapus');
    }

    public function view(Request $request){
        $artikel = DB::table('artikel')->where('id',$id)->get();
        return view ('jawaban.view', ['artikel' => $artikel]);
    }

}
