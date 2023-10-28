@extends('layout')
@section('content')

<section class="container my-4">
    <div>
        <div class="has-text-centered">
            <h1 class="title is-2">Edit Data mahasiswa - id {{$data->id}}</h1>
        </div>
        
        <a href="/" class="button is-primary">kembali</a>
    </div>

    
    <div class="mt-2 is-justify-content-center is-align-items-center">
            <form action="/edit?id={{$data->id}}" method="post" class="columns is-flex is-flex-direction-column box">
                @csrf

                <div class="column">
                    <label for="name">Nama</label>
                    <input name="name" class="input is-primary" type="text" placeholder="Nama" value="{{$data->name}}">

                    @error('name')
                        <p class="help is-danger">nama is required</p>
                    @enderror
                </div>
                <div class="column">
                    <label for="nim">NIM</label>
                    <input name="nim" class="input is-primary" type="number" placeholder="NIM" maxlength="10" value="{{$data->nim}}">
                    @error('nim')
                        <p class="help is-danger">nim is required, with length 10, and must be not same with other nim</p>
                    @enderror
                </div>
                <div class="column">
                    <label for="prodi">Prodi</label>
                    <input name="prodi" class="input is-primary" type="text" placeholder="Prodi" value="{{$data->prodi}}">
                    @error('prodi')
                        <p class="help is-danger">prodi is required</p>
                    @enderror
                </div>
                <div class="column">
                    <label for="angkatan">Angkatan</label>
                    <input name="angkatan" class="input is-primary" type="number" placeholder="Angkatan" maxlength="4" value="{{$data->angkatan}}">
                    @error('nim')
                        <p class="help is-danger">angkatan is required, with length 4</p>
                    @enderror
                </div>
                <div class="column">
                    <button class="button is-primary is-fullwidth" type="submit">submit</button>
                </div>
                
            </form>
    </div>
    

</section>