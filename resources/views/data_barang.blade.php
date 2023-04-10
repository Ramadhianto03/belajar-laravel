@extends('layouts.main')
@section ('title', 'Barang')

@section('content')
<h1>Selamat Datang Pembeli</h1>
<table class="table table-striped mt-5" >
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($name as $index =>$databarang )
            
        
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$databarang}}</td>
            <td>Rp.{{$price[$index]}}</td>
            </tr>
            @endforeach
    </tbody>
    
  @endsection