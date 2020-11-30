<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    //
    public function index()
    {
        $kampuses = Kampus::all();
        return view('kampus.index',['kampuses' => $kampuses]);
    }

    public function create()
    {
         return view('form-penambahan');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_kampus'       => 'required|unique:kampuses',
            'akreditasi'        => 'required',
            'status'            => 'required',
            'peringkat_asia'    => 'required',
            'peringkat_lokal'   => 'required',
            'lokasi'            => 'required',
            'gambar_profil'     => 'required',
        ]);

        $kampus = new Kampus();
        $kampus->nama_kampus = $validateData['nama_kampus'];
        $kampus->akreditasi = $validateData['akreditasi'];
        $kampus->status = $validateData['status'];
        $kampus->peringkat_asia = $validateData['peringkat_asia'];
        $kampus->peringkat_lokal = $validateData['peringkat_lokal'];
        $kampus->lokasi = $validateData['lokasi'];
        $kampus->gambar_profil = $validateData['gambar_profil'];

        if($file = $request->hasFile('gambar_profil'))
        {
            $namaFile = $kampus->id;
            $file = $request->file('gambar_profil');
            $fileName = $namaFile.'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/image/';
            $file->move($destinationPath, $fileName);
            $kampus->gambar_profil = $fileName;
        }
        $kampus->save();

        $request->session()->flash('pesan',"Penambahan data
        {$validateData['nama_kampus']} berhasil");
        return redirect()->route('kampuses.index');
    }

    public function show($kampus)
    {
        $result = Kampus::findOrFail($kampus);
        return view('kampus.show',['kampus' => $result]);
    }

    public function edit(Kampus $kampus)
    {
        return view('kampus.edit',['kampus' => $kampus]);
    }

    public function update(Request $request, Kampus $kampus)
    {
        $validateData = $request->validate([
            'nama_kampus'       => 'required',
            'akreditasi'        => 'required',
            'status'            => 'required',
            'peringkat_asia'    => 'required',
            'peringkat_lokal'   => 'required',
            'lokasi'            => 'required',
            'gambar_profil'     => '',
        ]);

        if($file = $request->hasFile('gambar_profil'))
        {
            $namaFile = $kampus->id;
            $file = $request->file('gambar_profil');
            $fileName = $namaFile.'_'.$file->getClientOriginalName();
            $destinationPath = public_path().'/image/';
            $file->move($destinationPath, $fileName);
            $kampus->gambar_profil = $fileName;
        }

        Kampus::where('id', $kampus->id)->update($validateData);

        return redirect()->route('kampuses.show',['kampus'=>$kampus->id])
        ->with('pesan', "Update data {$validateData['nama_kampus']} berhasil");
    }

    public function destroy(Kampus $kampus)
    {
        $kampus->delete();
        return redirect()->route('kampuses.index')
        ->with('pesan',"Hapus data $kampus->nama_kampus berhasil");
    }

    public function compare()
    {
        return view('kampus-compare');
    }
}
