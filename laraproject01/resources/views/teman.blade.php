@extends('layouts.app')
@section('judulpage','Data Teman') 

@section('konten')
<div class="container">
    <h3>Data Teman</h3>

    @if(empty($dt))
        <p>Tidak ada Data</p>
    @else
    <table class="table table-hover">
    <thead>
    <tr>
        <th>ID Buku</th>
        <th>Nama Teman</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telp</th>
        <th>WA</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dt as $d)
    <tr>
        <td>{{ $d['idbuku'] }}</td>
        <td>{{ $d['namateman'] }}</td>
        <td>Jl. Merdeka No. 10</td>
        <td>Bandung</td>
        <td>08123456789</td>
        <td>08123456789</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endif

</div>
@endsection