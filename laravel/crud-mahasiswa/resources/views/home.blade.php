@extends('layout')
@section('content')

<section class="container my-4">
    <div class="has-text-centered">
        <h1 class="title is-2">Data mahasiswa</h1>
    </div>

    
    <div class="my-4">
        <a href="/create" class="button is-primary">input data mahasiswa baru</a>
    </div>
    
    <div class="mt-3">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->nim}}</td>
                        <td>{{$d->prodi}}</td>
                        <td>{{$d->angkatan}}</td>
                        <td>
                            <a href="/edit?id={{$d->id}}" class="button is-warning mr-2">edit</a>
                            <a href="/delete?id={{$d->id}}" class="button is-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</section>
