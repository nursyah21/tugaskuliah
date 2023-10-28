<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mahasiswa $mahasiswa)
    {
        //
        $data = $mahasiswa->get();

        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mahasiswa $mahasiswa, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->validate([
                'name' => 'required',
                'nim' => 'required|min:10|max:10',
                'prodi' => 'required',
                'angkatan' => 'required|min:4|max:4'
            ]);
            // $data = $request->validate([
            //     'nim' => 'unique:mahasiswas,nim'
            // ]);
            $mahasiswa->create($data);

            return redirect('/');
        }

        
        return view('create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Mahasiswa $mahasiswa)
    {
        $id = $request->query('id');
        if($request->isMethod('post')){
            $data = $request->validate([
                'name' => 'required',
                'nim' => 'required|min:10|max:10',
                'prodi' => 'required',
                'angkatan' => 'required|min:4|max:4'
            ]);
            Mahasiswa::where('id', $id)->update($data);
            return redirect('/');
        }

        $data = $mahasiswa->find($id);
        return view('edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function delete(Mahasiswa $mahasiswa, Request $request)
    {
        $id = $request->query('id');
        if($request->isMethod('delete')){
            Mahasiswa::where('id', $id)->delete();
            return redirect('/');
        }
        $data = $mahasiswa->find($id);
        return view('delete', compact('data'));
    }
}
