<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', ['siswa' => $siswa]);
        //untuk menampilkan view data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        //
        return view('nambahsiswa', compact(['siswa']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $messages = [
            'required' => 'Field tidak boleh kosong!',
            'min' => 'Masukan setidaknya 3 karakter'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required'
        ],$messages);

        Siswa::create([
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);

        return redirect( 'siswa' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $p)
    {
        return view('siswa', compact(['p']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('edit', compact(['siswa']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
         $messages = [
            'required' => 'Field tidak boleh kosong!',
            'min' => 'Masukan setidaknya 3 karakter'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required'
        ],$messages);

        $input = $request->all();
        $siswa = Siswa::findOrFail($id);
        $siswa->update($input);

        return redirect()->route('siswa.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()->route('siswa.view');
    }
}
