<?php

namespace App\Http\Controllers;

use App\kontakModel;
use Illuminate\Http\Request;
use App\Repositories\kontakRepository;

class kontakController extends Controller
{
    private $kontakRepo;

    public function __construct(kontakRepository $repo)
    {
        $this->kontakRepo = $repo;
    }

    public function index(){
        $index = $this->kontakRepo->all();
        return view('kontak.index', ['listKontaks' => $index]);
    }

    public function new(){
        return view('kontak.new');
    }

    public function create(Request $request){
        $newkontak = new kontakModel;
        $newkontak->nama = $request->nama;
        $newkontak->telepon = $request->telepon;
        $newkontak->email = $request->email;
        $newkontak->alamat = $request->alamat;
        $newkontak->save();
        return redirect(route('kontak_index'));
    }

    public function getById($id){
        $kontak = $this->kontakRepo->getById($id);
        return view('kontak.detail', ['kontaks' => $kontak]);
    }

    public function edit($id){
        $kontak = $this->kontakRepo->getById($id);
        return view('kontak.edit', ['kontaks' => $kontak]);
    }
    
    public function delete($id){
        $this->kontakRepo->delete($id);
        return back();
    }

    public function update(Request $request){
        $this->kontakRepo->update($request->id, $request->nama, $request->telepon, $request->email, $request->alamat);
        return redirect()->route('kontak_index');
    }

    public function search(Request $request)
    {
        $kontak = kontakModel::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");})->get();
        return view('kontak.index', ['listKontaks'=>$kontak]);
    }   
}