<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\Http\Requests;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('index', ['stud' => Siswa::all()]);
    }
    public function create()
    {
    	return view ('create');
    }
    public function save(Request $r)
    {
         $message =[
            'required' => ':attribute field is required.',
            'unique' => ':attribute has already taken.',
            'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'nis' => 'required|integer',
            'nama' => 'required',
            'kelas' => 'required'
            ], $message);

    	$siswa = new Siswa;

    	$siswa->nis = $r->input('nis');
    	$siswa->nama = $r->input('nama');
    	$siswa->kelas = $r->input('kelas');
    	$siswa->save();

    	return redirect(url('siswa'));
    }
    public function edit($id)
    {
        // dd(Siswa::whereId($id)->first());
        // die();
        return view('edit', ['siswa' => Siswa::whereId($id)->first()]);
    }
    public function update(Request $r)
    {
    	$id = $r->input('id');
    	$siswa = Siswa::find($id);

    	$siswa->nis = $r->input('nis');
    	$siswa->nama = $r->input('nama');
    	$siswa->kelas = $r->input('kelas');
    	$siswa->save();

    	return redirect(url('siswa'));
    }
    public function delete($id)
    {
    	Siswa::whereId($id)->delete();
    	return redirect(url('siswa'));
    }
    public function search(Request $r)
    {
        $query = $r->input('nama');
        $pilihan = $r->input('pilihan');


        if ($pilihan =="nis") {
            $siswa = Siswa::where('nis','LIKE', "%".$query."%")->get();
            return view('index', ['stud'=> $siswa]);
        } elseif ($pilihan == "nama") {
            $siswa = Siswa::where('nama','LIKE', "%".$query."%")->get();
            return view('index', ['stud'=> $siswa]);   
        } elseif ($pilihan == "kelas") {
            $siswa = Siswa::where('kelas','LIKE', "%".$query."%")->get();
            return view('index', ['stud'=> $siswa]);           
        } 
}
}
